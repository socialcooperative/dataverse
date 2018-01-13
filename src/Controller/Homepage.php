<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class Homepage extends Controller
{
    public function index(){
			return $this->render('homepage/index.html.twig', array(
            'name' => 'friend',
        ));
		}
}
