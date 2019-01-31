<?php

namespace App\Controller;

use App\Repository\ActivityRepository;
use App\Repository\GenderRepository;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilTrombiController extends AbstractController
{
    /**
     * @Route("/profil/trombi", name="profil_trombi")
     * @param UserRepository $userRepository
     */
    public function index(

        ActivityRepository $activityRepository,
        GenderRepository $genderRepository,
        UserRepository $userRepository
    ) :Response {

        return $this->render('profil_trombi/index.html.twig', [
            'users' => $userRepository->findAll()
        ]);
    }
}
