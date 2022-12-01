<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/whois', name: 'app_static_whois')]
    public function whois(): Response
    {
        return $this->render('static/whois.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }

    #[Route('/cgv', name: 'app_static_cgv')]
    public function cgv(): Response
    {
        return $this->render('static/cgv.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }
}
