<?php

namespace App\Controller;

use App\Repository\CloseRepository;
use App\Repository\TypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilCollectionController extends AbstractController
{
    /**
     * @Route("/profil/collection", name="profil_collection")
     * @param CloseRepository $closeRepository
     */
    public function index(
        CloseRepository $closeRepository,
        TypeRepository $typeRepository
    ) : Response {

        return $this->render('profil_collection/index.html.twig', [
            'types' => $typeRepository->findAll()
        ]);
    }
}
