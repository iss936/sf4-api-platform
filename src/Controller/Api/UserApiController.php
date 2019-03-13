<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserApiController
{
	/*
	 * Route("/", name="app_index")
	 */
    public function infoUserAction(Request $request)
    {
    	return new Response($twig->render('index.html.twig'));
    }
}