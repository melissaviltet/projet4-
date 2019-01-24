<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrganisationController extends AbstractController
{
    /**
     * @Route("/organisation", name="organisation")
     */
    public function index()
    {
        return $this->render('organisation/index.html.twig', [
            'controller_name' => 'OrganisationController',
        ]);
    }
}
