<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class Homepage extends Controller
{
		/**
		* @Route("/", name="homepage")
		*/
		public function index(){
			return $this->render('general/home.html.twig', array(
            'name' => 'friend',
        ));
		}
}
