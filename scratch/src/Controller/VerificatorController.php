<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VerificatorController extends AbstractController
{
    /**
     * @Route("/verificator", name="verificator")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'tabsId' => ['inspection', 'history', 'contact', 'my-profile'],
            'tabs' => [
                'inspection' => 'Inspection',
                'history' => 'Historique',
                'contact' => 'Contact',
                'my-profile' => '<span class="material-icons">account_box</span>',
            ],
        ]);
    }
}
