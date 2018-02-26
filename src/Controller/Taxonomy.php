<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use RedBeanPHP\R;

class Taxonomy extends App
{

    /**
    * @Route("/taxonomy/new", name="taxonomy_new")
    */
    public function taxonomy_new()
    {
        $data['label'] = $_REQUEST['label'] ? $_REQUEST['label'] : 'New Taxonomy '.rand(1, 9000);

        $data_id = $this->item_save('taxonomy', $data);

        return $this->json($this->item);
    }

    /**
    * @Route("/taxonomy/{taxonomy_id}/tag/add", name="test")
    */
    public function taxonomy_add($taxonomy_id)
    {
        $this->taxonomy_id = $taxonomy_id;

        $tag_id = $this->tag_add($_REQUEST['label'], $_REQUEST['parent'], $_REQUEST['grandparent'], $_REQUEST['meta']);

        return $this->json($this->item);
    }

    public function tag_add($label=null, $parent=null, $grandparent=null, $meta=[])
    {
        if (!$label) {
            return exit('You need to provide the tag label');
        } else {
            $data['label'] = $label;
        }

        if (is_numeric($parent)) {
            $data['parent_id'] = $parent;
        } elseif ($parent && $grandparent) { // make sure it's the right one
            $data['parent'] = $this->tag_search_with_parent($parent, $grandparent);
        } elseif ($parent) {
            $data['parent'] = $this->get_like_field('tag', 'label', $parent);
        }

        if ($this->taxonomy_id) {
            $data['taxonomy'][] = $this->data_by_id('taxonomy', $this->taxonomy_id);
        }

        //		var_dump($this->taxonomy_id, $data); exit();

        if (count($meta)) {
            foreach ($meta as $type => $subtypes) {
                foreach ($subtypes as $subtype => $vals) {
                    if (!is_array($vals)) {
                        $add_meta[] = $this->tag_meta_prepare($type, $subtype, $vals);
                    } else {
                        foreach ($vals as $val) {
                            $add_meta[] = $this->tag_meta_prepare($type, $subtype, $val);
                            //						$this->tag_meta_add($tag, $type, $subtype, $val);
                        }
                    }
                }

                $data['meta'] = $add_meta;
            }
        }

        $tag_id = $this->item_save('tag', $data);
        //		$tag = $this->item;

        return $tag_id;
    }


    public function tag_meta_prepare($type, $subtype, $val)
    {
        //		exit("$tag_id, $type, $subtype, $val");
        $meta['meta_type'] = $type;
        $meta['meta_detail'] = $subtype;
        $meta['meta_data'] = $val;
        return $meta;
    }

    public function tag_delete()
    {
        //		CALL `tag_hide`('26', '1') // call procedure to hide child tags too
    }

    public function tag_search_with_parent($value, $parent)
    {
        if (is_numeric($parent)) { // search parent by ID

            $t = $this->tag_by_name_with_parent_id($value, $parent);
            if ($t->label) {
                return $t;
            }
        }

        // fallback
        $matches = R::findCollection('tag', 'label LIKE ? ', [ $value ]);
        while ($t = $matches->next()) {
            if ($t->parent_id) {
                $p = $t->fetchAs('tag')->parent;
            }

            if ($p->label==$parent) {
                return $t;
            }
        }

        // failed
        exit("\n!! Mismatch with tag_search_with_parent($value, $parent)\n");
    }


    public function tag_by_name_with_parent_id($value, $parent_id)
    {
        return R::findOne('tag', 'label LIKE ? AND parent_id = ? ', [ $value, $parent_id ]);
    }

    public function tag_tree_list($tag_id=1, $separator='﹣', $max_depth=3)
    {
        $list = R::getAll("CALL tag_tree_list('$tag_id', '$separator', '$max_depth')");
        // var_dump($list);
        if (!count($list) && ($tag = $this->data_by_id('tag', $tag_id)) && $tag->parent_id) {
            return $this->tag_tree_list($tag->parent_id, $separator, $max_depth);
        } // if empty tree, show parent's tree

        return $list;
    }

    public function tree_deflatten($tag_tree)
    {
        $r = array();

        foreach ($tag_tree as $t) {
            // $t = (object) $t;

            $parts = explode(',', $t['breadcrumbs']);

            $parts = array_filter($parts); // remove empty
        $cur_item = array_pop($parts); // last col

        // var_dump($t, $parts, $cur_item);

            // Build parent structure
            // Might be slow for really deep and large structures
            $parent_ar = &$r;
            foreach ($parts as $part) { // columns

                if (!isset($parent_ar[$part])) {
                    $parent_ar[$part] = array();
                } elseif (!is_array($parent_ar[$part])) {
                    $parent_ar[$part] = array();
                }

                $parent_ar = &$parent_ar[$part];
            }

            // Add the final part to the structure
            if (empty($parent_ar[$cur_item])) {
                // $parent_ar[$cur_item] = [];
                $parent_ar[$cur_item]['info'] = $t;
            }
        }

        // echo '<pre>'; print_r($r); exit();

        // while(count($r) === 1) { // remove extraneous layers
        //     $r = reset($r);
        // }
        return $this->item_prepare_children($r)->children[0];
    }

    public function item_prepare_children($tree, $item_key=false, $recursing=1)
    {
        $item_out = new class {
        };

        if ($tree['info']) {
            // $item_out = (object) $item;
            $item_out->id = $tree['info']['id'];
            $item_out->name = $tree['info']['label'];
            // $item_out->breadcrumbs = $item['breadcrumbs'];
        }

        if ($item_key && !$item_out->id) { // for parents higher up than the looked up tag, need to fetch the info

            if (!$this->tags_by_id[$item_key]) {
                $this->tags_by_id[$item_key] = $this->data_by_id('tag', $item_key);
            } // cache

            $tag = $this->tags_by_id[$item_key];

            $item_out->id = $tag->id;
            $item_out->name = $tag->label;
        }

        foreach ($tree as $key => $item) {
            if ($key=='info') {
                continue;
            } elseif (is_array($item)) {
                // var_dump($item_out);
                $item_out->children[] = $this->item_prepare_children($item, $key, $recursing+1);
            }
        }


        return $item_out;
    }

    public function taxonomy_get($parent_id = 1, $taxonomy_id = false, $limit_depth = false, $separator = false)
    {
        if (!$limit_depth) {
            $limit_depth = $_REQUEST['depth'];
        }

        if (!$limit_depth) {
            $limit_depth = 2;
        } //default

        if (!$separator) {
            $separator = '﹣';
        } //default

        if ($_REQUEST['output']=='tree') {
            $separator = '';
        } //none for non-flat

        $this->output_format = $_REQUEST['format'];

        if (!$this->output_format) {
            $this->output_format = 'json';
        } //default

        $tag_tree = $this->tag_tree_list($parent_id, $separator, $limit_depth);
        // echo '<pre>'; print_r($tag_tree); exit();

        if ($_REQUEST['output']=='tree') {
            $tag_tree = $this->tree_deflatten($tag_tree);
            // echo '<pre>'; print_r($tag_tree); exit();
        }

        return ($tag_tree);
    }

    public function taxonomy_ouput($parent_id = 1, $taxonomy_id = false, $limit_depth = false, $separator = false)
    {
        $tag_tree = $this->taxonomy_get($parent_id, $taxonomy_id, $limit_depth, $separator);

        if ($this->output_format == 'json') {
            return $this->json($tag_tree);
        } else {
            echo '<pre>';
            print_r($tag_tree);
            exit(p); // TODO: other formats
        }
    }
}
