<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
	/**
	 * @Route("/", name="app_index")
	 */
    public function indexAction(\Twig_Environment $twig, Request $request)
    {
    	return new Response($twig->render('index.html.twig'));
    }
}