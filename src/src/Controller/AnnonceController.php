<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\AnnonceRepository;
use App\Entity\Annonce;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\AnnonceType;
use App\Form\ReponseType;
use App\Form\QuestionType;
use App\Repository\TagRepository;
use App\Service\UploadHelper;
use DateTime;
use Symfony\Component\Security\Core\Security;


#[Route('/annonces')]
class AnnonceController extends AbstractController
{
    #[Route('/', name: 'app_annonce')]
    public function index(AnnonceRepository $repository, TagRepository $tagRepo): Response
    {
        $annonces = $repository->findAll();
        $tags = $tagRepo->findAll();
        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController',
            'annonces' => $annonces,
            "categories" => $tags
        ]);
    }

    private $security;
    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    #[Route('/add', name: 'app_sell')]
    public function add(Request $request, EntityManagerInterface $entityManager, UploadHelper $Helper): Response
    {
        $user = $this->security->getUser();
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $files = $form['file']->getData();
            if ($files) {
                $file = $Helper->uploadImages($files);
                $annonce->setFile($file);
            }

            $annonce->setAuteur($user);
            $annonce->setDate(new DateTime());
            $tags = $form['tags']->getData();
            foreach ($tags as $tag) {
                $annonce->addTag($tag);
            }
            $entityManager->persist($annonce);
            $entityManager->flush();
            return $this->redirectToRoute('app_annonce', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->renderForm('annonce/add.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/remove/{id}', name: 'app_delete_annonce')]
    public function remove(Request $request, EntityManagerInterface $entityManager, Annonce $annonce): Response
    {
        $user = $this->security->getUser();
        if ($user == $annonce->getAuteur()){
            if ($request->isMethod('post') && $request->get('confirm') == "yes") {
                $entityManager->remove($annonce);
                $entityManager->flush();
                return $this->redirectToRoute('app_home', [], 307);
            }
            else if ($request->isMethod('post') && $request->get('confirm') == "no") {
                return $this->redirectToRoute('app_home',);
            }
            else{                
                return $this->renderForm('annonce/delete.html.twig', [
                    'annonce' => $annonce
                ]);
            }
        }
        else{
            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/details/{id}', name: 'app_details_annonce')]
    public function showDetails(Request $request, EntityManagerInterface $entityManager, Annonce $annonce): Response
    {
        return $this->renderForm('annonce/details.html.twig', [
            'annonce' => $annonce
        ]);
    }
}
