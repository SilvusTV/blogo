<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WhoController extends AbstractController
{
    #[Route('/qui-sommes-nous', name: 'who')]
    public function index(): Response
    {
        return $this->render('who/index.html.twig', [
            'controller_name' => 'WhoController'
        ]);
    }
}
