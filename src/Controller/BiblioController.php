<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BiblioController extends AbstractController
{
    /**
     * @Route("/biblio", name="biblio")
     */
    public function index()
    {
        return $this->render('biblio/index.html.twig', [
            'controller_name' => 'BiblioController',
        ]);
    }
    
}
