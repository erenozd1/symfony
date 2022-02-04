<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ForController extends AbstractController
{
    /**
     * @Route("/for", name="for")
     */
    public function index(): Response
    {
        $data = ['1','2'];

        return $this->render('for/index.html.twig', [
            'data'=>$data,
            'isActive'=>false,
        ]);
    }
}
