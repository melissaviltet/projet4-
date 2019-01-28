<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilHomeController extends AbstractController
{
    /**
     * @Route("/profil/home", name="profil_home")
     */
    public function index()
    {
        $user = $this-> getUser();
        return $this->render('profil_home/index.html.twig', [
            'user' => $user,
        ]);
    }
}
