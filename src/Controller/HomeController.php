<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function default(){
        return $this->redirectToRoute("healthcheck_route");
    }

    /**
     * @Route("/healthcheck", name="healthcheck_route")
     * @return Response
     */
    public function healthcheck(){
        return new Response("Alive !", Response::HTTP_OK);
    }
}
