<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Entity\Vote;
use App\Repository\VoteRepository;
use Symfony\Component\Security\Core\Security;

#[Route('/vote')]
class VoteController extends AbstractController
{
        private $security;
    
        public function __construct(Security $security)
        {
           $this->security = $security;
        }
    
        public function getLoggedInUser()
        {
            return $this->security->getUser();
        }
    
        #[Route('/add/{id}', name: 'app_vote_add')]
        public function voteAdd(Request $request, User $target, EntityManagerInterface $entityManager, VoteRepository $repo): Response
        {
            $user = $this->getLoggedInUser();
            if ($user != $target && !$repo->findOneBy(['auteur' => $user, 'cible' => $target])){
                if ($request->isMethod('post') && ($request->get('vote') == "up" || $request->get('vote') == "down") ) {
                    $vote = new Vote();
                    $vote->setAuteur($user);
                    $vote->setCible($target);
                    if ($request->get('vote') == "up") $vote->setUpDown(1); else $vote->setUpDown(-1); 
                    $entityManager->persist($vote);
                    $entityManager->flush();
                    return $this->redirectToRoute('app_seller', ["id"=>$target->getId()]);
                }
                else{                
                    return $this->render('vote/add.html.twig', [
                        "target" => $target
                    ]);
                }
            }
            else if ($user == $target) {
                return $this->redirectToRoute('app_seller', ["id"=>$target->getId()]);
            }
            else{
                return $this->redirectToRoute('app_vote_update', ["id"=>$repo->findOneBy(['auteur' => $user, 'cible' => $target])->getId()]);
            }
        }

        #[Route('/update/{id}', name: 'app_vote_update')]
        public function voteUpdate(Request $request, EntityManagerInterface $entityManager, VoteRepository $repo, int $id): Response
        {
            $user = $this->getLoggedInUser();
            $vote = $repo->find($id);
            $target = $vote->getCible();

            if (!$vote) {
                throw $this->createNotFoundException(
                    'Pas de vote trouvé pour ID '.$id
                );
            }
            
            if ($user == $vote->getAuteur()){
                if ($request->isMethod('post') && ($request->get('vote') == "up" || $request->get('vote') == "down") ) {
                    if ($request->get('vote') == "up") $vote->setUpDown(1); else $vote->setUpDown(-1); 
                    $entityManager->flush();
                    return $this->redirectToRoute('app_seller', ["id"=>$target->getId()]);
                }
                else{                
                    return $this->render('vote/add.html.twig', []);
                }
            }
            else{
                return $this->redirectToRoute('app_home', ["id"=>$target->getId()]);
            }
        }
    }