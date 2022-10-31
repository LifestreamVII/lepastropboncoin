<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Tag;
use App\Repository\TagRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\UploadHelper;


class SymfonyController extends AbstractController
{
   /**
    * @Route("/", name="app_home")
    */
    public function home(EntityManagerInterface $em): Response
    {
        $tags = $em->getRepository(Tag::class)->findAll();
        return $this->render("home.html.twig", [
            "categories" => $tags
        ]);
    }
}