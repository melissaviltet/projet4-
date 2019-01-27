<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/about", name="home")
     */
    public function index()
    {
        return $this->render('about/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
