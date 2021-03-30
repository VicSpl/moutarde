<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndividualController extends AbstractController
{
    /**
     * @Route("/individual", name="individual")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'tabsId' => ['cat-profile', 'see-cat-profile', 'contact', 'my-profile'],
            'tabs' => [
                'contact' => 'Contact',
                'my-profile' => '<span class="material-icons">account_box</span>',
                'cat-profile' => 'Profile chat',
                'see-cat-profile' => "Voir mes chats"
            ],
        ]);
    }
}
