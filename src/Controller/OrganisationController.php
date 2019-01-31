<?php

namespace App\Controller;

use App\Repository\AboutRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganisationController extends AbstractController
{
    /**
     * @Route("/organisation", name="organisation")
     * @param AboutRepository $aboutRepository
     */
    public function index(AboutRepository $aboutRepository): Response
    {
        $abouts = $aboutRepository->findAll();
        return $this->render('organisation/index.html.twig', [
            'abouts' => $abouts
        ]);
    }
}
