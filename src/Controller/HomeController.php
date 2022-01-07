<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(AnnonceRepository $annonceRepository): Response
    {

        // affiche le fichier index.html.twig
        return $this->render('home/index.html.twig', [
            'annonces' =>
            $annonceRepository->findBy(['isSold' => 'false', 'status' => '4'], ['createdAt' => 'DESC'], 3)
        ]);
    }
}
