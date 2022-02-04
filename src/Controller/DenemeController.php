<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DenemeController extends AbstractController
{
    /**
     * @Route("/deneme/show", name="deneme")
     */
    public function index(): Response
    {
        return $this->render('deneme/index.html.twig', [
            'controller_name' => 'DenemeController',
        ]);
    }

    /**
     * @Route("/deneme/show2", name="deneme2")
     */
    public function deneme(): Response
    {

        $data = 25;
        dump($data);
        exit;
        return $this->render('deneme/index.html.twig', [
            'controller_name' => 'DenemeController',
        ]);
    }

    /**
     * @Route("/deneme/{data}", name="deneme3")
     */
    public function deneme2($data): Response
    {


         return new Response("Gönderdiğiniz veri:".$data);
        dump($data);
        exit;
        return $this->render('deneme/index.html.twig', [
            'controller_name' => 'DenemeController',
        ]);
    }
}
