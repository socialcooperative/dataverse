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

        if (isset($this->taxonomy_id) &&  is_numeric($this->taxonomy_id)) {
            $data['taxonomy'][] = $this->data_by_id('taxonomy', $this->taxonomy_id);
        }

        //		var_dump($this->taxonomy_id, $data); exit();

        if (isset($meta) && count($meta)) {
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

    public function tag_meta_prepare($type, $subtype, $val, &$meta = [])
    {
        $meta['meta_type'] = $type;
        $meta['meta_detail'] = $subtype ? $subtype : '';
        $meta['meta_data'] = $val;

        return $meta;
    }

    public function meta_add_to_tag($tag, $type, $subtype=null, $val)
    {
        if (!$tag) {
            return exit('You need to indicate what tag');
        } elseif (is_numeric($tag)) {
            $tag = R::load('tag', $tag);
        }

        $meta = R::dispense('meta');

        $meta->meta_type = $type;
        $meta->meta_detail = $subtype ? $subtype : '';
        $meta->meta_data = $val;

        $meta->sharedTagList[] = $tag;

        $meta_id = R::store($meta);

        return $meta_id;
    }


    public function tag_hide($tag_id)
    {
        //		CALL `tag_hide`('26', '1') // call procedure which hides child tags too
        return R::exec("CALL tag_hide('$tag_id', 1)");
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

    public function tag_meta_by_id($tag_id)
    {
        $tag = $this->tag_by_id($tag_id);
        $tagArray = $tag->export();
        $metas = $tag->sharedMetaList;
        foreach ($metas as $m) {
            if ($m->meta_detail) {
                $tagArray['meta'][$m->meta_type][$m->meta_detail] = $m->meta_data;
            } else {
                $tagArray['meta'][$m->meta_type] = $m->meta_data;
            }
        }

        return $tagArray;
    }

    public function tag_by_id($tag_id)
    {
        $tag = R::load('tag', $tag_id);
        // $tag = $tag->export();

        return $tag;
    }

    public function tags_by_meta($type=null, $detail=null, $data=null, $return_as_bean=false)
    {

      // var_dump($type, $detail, $data);
        // exit();
        $result = [];

        if ($type && $detail && $data) {
            $metas = R::find('meta', ' meta_type LIKE ? AND meta_detail LIKE ? AND meta_data LIKE ? ', [ $type, $detail, $data ]);
        } elseif ($type && $detail) {
            $metas = R::find('meta', ' meta_type LIKE ? AND meta_detail LIKE ?', [ $type, $detail ]);
        }

        // var_dump($metas);
        // exit();

        foreach ($metas as $m) {
            $meta = [];
            $tags = $m->sharedTagList;

            if ($m->meta_detail) {
                $meta['meta'][$m->meta_type][$m->meta_detail] = $m->meta_data;
            } else {
                $meta['meta'][$m->meta_type] = $m->meta_data;
            }

            foreach ($tags as $t) {
                if ($return_as_bean) {
                    return $t;
                } // override

                $meta['tags'][] = $t->export();
            }

            $result[] = $meta;
        }

        // var_dump($result);

        return $result;
    }

    public function tag_by_meta($type=null, $detail=null, $data=null, $return_as_bean=false)
    {
        $datas = $this->tags_by_meta($type, $detail, $data);

        $datas = current($datas)['tags']; // only 1 meta
      $datas = (object) current($datas); // only 1 tag

      return $datas;
    }

    public function tag_by_name_with_parent_id($value, $parent_id)
    {
        return R::findOne('tag', 'label LIKE ? AND parent_id = ? ', [ $value, $parent_id ]);
    }

    public function tag_tree_list($tag_id=1, $separator='≫', $max_depth=3)
    {
        $list = R::getAll("CALL tag_tree_list('$tag_id', ' $separator ', '$max_depth')");
        // var_dump("CALL tag_tree_list('$tag_id', ' $separator ', '$max_depth')", $list);
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
            $separator = $_REQUEST['separator'];
        }

        if (!$separator) {
            $separator = '≫';
        } //default

        $this->output_as = $_REQUEST['output'];
        $this->output_format = $_REQUEST['format'];

        if ($this->output_as=='tree') {
            $separator = '';
        } //none for non-flat

        if (!$this->output_format) {
            $this->output_format = 'json';
        } //default

        // TODO: filter by taxonomy_id

        if ($this->output_as=='tree') {
            $tag_tree = $this->tag_tree_list($parent_id, $separator, $limit_depth);
            // echo '<pre>'; print_r($tag_tree); exit();

            $tag_tree = $this->tree_deflatten($tag_tree);
        // echo '<pre>'; print_r($tag_tree); exit();
        } else {
            $tag_tree = $this->tag_meta_by_id($parent_id);
        }

        return ($tag_tree);
    }

    public function taxonomy_output($parent_id = 1, $taxonomy_id = false, $limit_depth = false, $separator = false)
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

    public function tag_ancestors($tag_id=null)
    {
        $t = R::getAll(
            'SELECT
           node.`id`,
           node.`label`,
           path.`depth`,
           node.`parent_id`
          FROM
           `tag` AS node
           JOIN `tag_tree` AS path
             ON node.`id` = path.`ancestor_id`
          WHERE path.`descendant_id` = :tag_id
           AND node.`is_deleted` = 0
          -- AND path.`depth` <= 5
          GROUP BY node.`id`
          ORDER BY path.`depth` DESC',
        [':tag_id' => $tag_id]
        );
        // var_dump($t);
        return $t;
    }

    public function tag_name_with_ancestors($tag_id=null, $separator=' ≫ ', $under_tag=false)
    {
        // var_dump($tag_id, $separator, $under_tag);

        $tags = $this->tag_ancestors($tag_id);

        foreach ($tags as $t) {
            // var_dump($under_tag, $t);
            if ($str || !$under_tag || $under_tag==$t['parent_id']) {
                if (!$str) {
                    $str = $t['label'];
                } else {
                    $str .= " $separator ".$t['label'];
                }
            }
        }
        // var_dump($tags, $str);

        return $str;
    }

    public function tag_edit($tag_id, $update=[])
    {
        // R::fancyDebug(true);

        $tag = $this->tag_by_id($tag_id);

        if ($update['label']) {
            $tag->label = strip_tags($update['label']);
        }

        if ($update['parent_tag']) {
            $tag->parent_id = (int) $update['parent_tag'];
        }

        R::store($tag);

        return $tag;
    }
}
