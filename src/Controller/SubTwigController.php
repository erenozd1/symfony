<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SubTwigController extends AbstractController
{
    /**
     * @Route("/sub/twig", name="sub_twig")
     */
    public function index(): Response
    {
        return $this->render('sub_twig/index.html.twig', [
            'controller_name' => 'SubTwigController',
        ]);
    }
}
