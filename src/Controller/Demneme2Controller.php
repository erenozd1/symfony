<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Demneme2Controller extends AbstractController
{
    /**
     * @Route("/demneme2", name="demneme2")
     */
    public function index(): Response
    {
        return $this->render('demneme2/index.html.twig', [
            'eren' => 'Merhaba Ben Eren',
        ]);
    }
}
