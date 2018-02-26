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
        return $this->taxonomy_ouput($parent_id, $taxonomy_id);
    }

    /**
    * @Route("/taxonomy/tag/{parent_id}", name="taxonomy_by_tag")
    */
    public function taxonomy_by_tag($parent_id = 1)
    {
        return $this->taxonomy_ouput($parent_id);
    }

    /**
    * @Route("/taxonomy/{taxonomy_id}", name="full_taxonomy_by_id")
    */
    public function full_taxonomy_by_id($taxonomy_id = false)
    {
        return $this->taxonomy_ouput(1, $taxonomy_id);
    }
}
