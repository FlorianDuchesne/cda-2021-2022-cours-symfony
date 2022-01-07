<?php

namespace App\Controller\Admin;

use App\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/admin/annonce", name="admin_annonce")
     */
    public function index(): Response
    {
        $annonceRepo = $this->getDoctrine()->getManager()->getRepository(Annonce::class);
        $annonces = $annonceRepo->findAll();
        // dd($annonces);
        return $this->render('admin/annonce/index.html.twig', [
            'annonces' => $annonces,
            'controller_name' => 'AnnonceController',
        ]);
    }
}
