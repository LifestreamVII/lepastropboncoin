<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Questions extends AbstractController
{
   /**
    * @Route("/questions/{wildcard}", name="question")
    */
    public function show($wildcard)
    {
    $answers = ["Réponse Une","Réponse Deux","Réponse Trois"];
    return $this->render("questions.html.twig", [
        "question" => sprintf("La question posée est : %s", $wildcard),
        "answers" => $answers
    ]);
    }
}