<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\QuestionFormType;
use App\Form\ReponseFormType;
use App\Entity\Question;
use App\Entity\Reponse;
use DateTime;
use App\Entity\Annonce;

class QuestionController extends AbstractController
{
    #[Route('/question/{id}', name: 'app_question')]
    public function questionShow(Question $question): Response
    {
        return $this->render('question/index.html.twig', [
            'question' => $question,
        ]);
    }

    private $security;
    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    #[Route('/question/add/{id}', name: 'app_question_add')]
    public function questionAdd(Request $request, Annonce $annonce, EntityManagerInterface $entityManager): Response
    {
        $user = $this->security->getUser();
        $question = new Question();
        $form = $this->createForm(QuestionFormType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $question->setAuteur($user);
            $question->setDescription($form->get('description')->getData());
            $question->setDate(new DateTime());
            $question->setAnnonce($annonce);

            $entityManager->persist($question);
            $entityManager->flush();
            
        }

        return $this->render('question/add.html.twig', [
            'questionForm' => $form->createView(),
        ]);
}

    #[Route('/question/add/reponse/{id}', name: 'app_reponse_add')]
    public function reponseAdd(Request $request, Question $question, EntityManagerInterface $entityManager): Response
    {
        $user = $this->security->getUser();
        $annonce = $question->getAnnonce();
        if ($user != $annonce->getAuteur()){
            return $this->redirectToRoute('app_home');
        }
        else
        {
            $reponse = new Reponse();
            $form = $this->createForm(ReponseFormType::class, $reponse);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
    
                $reponse->setAuteur($user);
                $reponse->setDate(new DateTime());
                $reponse->setDescription($form->get('description')->getData());
                $reponse->setQuestion($question);
    
                $entityManager->persist($reponse);
                $entityManager->flush();
            }
    
            return $this->render('question/add.html.twig', [
                'questionForm' => $form->createView(),
            ]);
        }
}


}
