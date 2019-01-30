<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilTrombiController extends AbstractController
{
    /**
     * @Route("/profil/trombi", name="profil_trombi")
     */
    public function index()
    {
        return $this->render('profil_trombi/index.html.twig', [
            'controller_name' => 'ProfilTrombiController',
        ]);
    }
}
