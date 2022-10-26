<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

#[Route('/user')]
class UserController extends AbstractController
{
<<<<<<< HEAD
    private $security;

    public function __construct(Security $security)
    {
       $this->security = $security;
    }

    public function getLoggedInUser() : Response
    {
        return $this->security->getUser();
    }

    #[Route('/user', name: 'app_user')]
=======
    #[Route('/', name: 'app_user')]
>>>>>>> 2461e3af6befd67efd2ef1ed68e07b9d1fd24ac2
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
