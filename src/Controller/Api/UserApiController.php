<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class UserApiController
{
	public function __construct()
	{
	}
    public function __invoke(User $user)
    {
    	var_dump($user);
    	die();
    	return new Response($twig->render('index.html.twig'));
    }
}