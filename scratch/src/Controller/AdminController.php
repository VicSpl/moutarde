<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'tabsId' => ['content', 'users', 'messaging', 'my-profile'],
            'tabs' => [
                'content' => 'Contenu',
                'users' => 'Utilisateur',
                'messaging' => 'Messagerie',
                'my-profile' => '<span class="material-icons">account_box</span>',
            ],
        ]);
    }
}
