<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnnonceRepository;

#[Route('/annonce')]
class AnnonceController extends AbstractController
{
    #[Route('/', name: 'app_annonce')]
    public function index(AnnonceRepository $repository): Response
    {
        $annonces = $repository->findAll();
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
            'FIRSTNAM' => 'User',
            'annonces' => $annonces,
        ]);
    }

    #[Route('/add', name: 'add_annonce')]
    public function add_annonce($wildcard, EntityManagerInterface $em)
    {
        $maNews = new Annonce();
        $maNews->setTitre('La première annonce du site'); 
        $maNews->setDescription($wildcard);
        $maNews->setPrix(10);
        $maNews->setAuteur("richard");
        $maNews->setDate(new DateTime());

        $em->persist($maNews);
        $em->flush();

        return $this->render("home.html.twig", [
            "name" => "user"
        ]);
    }
}
