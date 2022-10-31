<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;


#[Route('/profile')]
class UserController extends AbstractController
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

    #[Route('/')]
    #[Route('/me', name: 'app_profile')]
    public function index(): Response
    {
        $user = $this->getLoggedInUser();
        return $this->render('user/me.html.twig', [
            "annonces" => $user->getAnnonces()
        ]);
    }
    #[Route('/{id}', name: 'app_seller', requirements: ['id' => '\d+'])]
    public function showSeller(User $user): Response
    {
        return $this->render('user/seller.html.twig', [
            'user' => $user,
            "annonces" => $user->getAnnonces()
        ]);
    }
}
