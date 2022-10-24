<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Annonce;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;



class AddAnnonce extends AbstractController
{
   /**
    * @Route("/add/{wildcard}", name="annonce_add")
    */
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