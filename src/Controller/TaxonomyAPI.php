<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use RedBeanPHP\R;

class TaxonomyAPI extends Taxonomy
{

    /**
    * @Route("/taxonomy/{taxonomy_id}/tag/{parent_id}", name="taxonomy_by_and_tag")
    */
    public function taxonomy_by_and_tag($taxonomy_id = false, $parent_id = 1)
    {
        return $this->taxonomy_output($parent_id, $taxonomy_id);
    }

    /**
    * @Route("/taxonomy/tag/{parent_id}", name="taxonomy_by_tag")
    */
    public function taxonomy_by_tag($parent_id = 1)
    {
        return $this->taxonomy_output($parent_id);
    }

    /**
    * @Route("/taxonomy/{taxonomy_id}", name="full_taxonomy_by_id")
    */
    public function full_taxonomy_by_id($taxonomy_id = false)
    {
        return $this->taxonomy_output(1, $taxonomy_id);
    }

    /**
    * @Route("/taxonomy/{taxonomy_id}/tag/{tag_id}/tags", name="search_tags_taxonomy_by_id_under_tag")
    */
    public function search_tags_taxonomy_by_id_under_tag($taxonomy_id = false, $tag_id=false)
    {
        return $this->search_tags_taxonomy_by_id($taxonomy_id, $tag_id);
    }

    /**
    * @Route("/taxonomy/meta/{type}/{detail}/{data}/tags", name="search_tags_by_meta_data")
    */
    public function search_tags_by_meta_data($type=null, $detail=null, $data=null)
    {
        return $this->json($this->tags_by_meta($type, $detail, $data));
    }

    /**
    * @Route("/taxonomy/meta/{type}/{detail}/tags", name="search_tags_by_meta")
    */
    public function search_tags_by_meta($type=null, $detail=null)
    {
        return $this->search_tags_by_meta_data($type, $detail, null);
    }


    /**
    * @Route("/taxonomy/{taxonomy_id}/tags", name="search_tags_taxonomy_by_id")
    */
    public function search_tags_taxonomy_by_id($taxonomy_id = false, $under_tag=false)
    {
        $term   = $_GET['q'] ? $_GET['q'] : $_GET['term'];
        $via   = $_GET['via'];

        $ret = new class {
        };

        $results = R::getAll(
            "select id, label as label
        from tag
        where label like concat('%', :search, '%')
        order by
          label like concat(:search, '%') desc, -- starts with
          label like concat('% ', :search) desc, -- full word at end
          ifnull(nullif(instr(label, concat(' ', :search, ' ')), 0), 99999), -- full word
          ifnull(nullif(instr(label, concat(', ', :search)), 0), 99999), -- after a comma
          ifnull(nullif(instr(label, concat('/ ', :search)), 0), 99999), -- after an OR
          ifnull(nullif(instr(label, concat('& ', :search)), 0), 99999), -- after an AND
          label
        LIMIT 30
          ",
        [':search' => $term]
    );

        if (!$separator) {
            $separator = $_REQUEST['separator'];
        }

        if (!$separator) {
            $separator = '≫';
        }

        foreach ($results as $r) {
            // var_dump($r);
            $r = (object) $r;
            $ancestors_str = $this->tag_name_with_ancestors($r->id, $separator, $under_tag);
            if ($ancestors_str) {
                $r->text = $ancestors_str;
            }
            $ret->results[] = $r;
        }

        return $this->json($ret);
    }

    /**
    * @Route("/taxonomy/{taxonomy_id}/tag/{parent_tag}/new", name="taxonomy_tag_new")
    */
    public function taxonomy_tag_new($taxonomy_id, $parent_tag)
    {
        if ($taxonomy_id) {
            $this->taxonomy_id = $taxonomy_id;
        }

        $tag_id = $this->tag_add($_REQUEST['label'], $parent_tag, $_REQUEST['grandparent'], $_REQUEST['meta']);

        return $this->json($this->item);
    }

    /**
    * @Route("/taxonomy/tag/{parent_tag}/new", name="tag_add")
    */
    public function tag_new($parent_tag)
    {
        $tag_id = $this->tag_add($_REQUEST['label'], $parent_tag, $_REQUEST['grandparent'], $_REQUEST['meta']);

        return $this->json($this->item);
    }
}
