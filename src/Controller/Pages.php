<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class Pages extends App
{
    /**
    * @Route("/", name="homepage")
    */
    public function home()
    {
        return $this->render('general/home.html.twig', array(
            'name' => 'friend',
        ));
    }
}
