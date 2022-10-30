<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AnnonceRepository;
use App\Entity\Annonce;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\AnnonceType;
use App\Form\ReponseType;
use App\Form\QuestionType;

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
    public function add(Request $request, AnnonceRepository $annonceRepository): Response
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $annonce->setAuteur();
            $tags = $form['tags']->getData();
            foreach ($tags as $tag) {
                $annonce->addTag($tag);
            }
            $annonceRepository->save($annonce);
            return $this->redirectToRoute('app_annonce', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('annonce/add.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }
}
