<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommonController extends AbstractController
{
    /**
     * @Route("/", name="common")
     */
    public function index(): Response
    {

        // if connected return user page
        // ... 
        // else return offline page
        return $this->offline();
    }
    /**
     * @Route("/offline", name="offline")
     */
    public function offline(): Response
    {
        return $this->render('index.html.twig', [
            'tabsId' => ['home', 'interface', 'about'],
            'tabs' => ['home' => 'Accueil', 'interface' => 'Connexion/Incription', 'about' => 'A propos'],
        ]);
    }
}
