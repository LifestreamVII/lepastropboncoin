<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Yes extends AbstractController
{
   /**
    * @Route("/yes", name="yes")
    */
    public function yes(): Response
    {
    return $this->render("base.html.twig", [
        "FIRSTNAM" => "yes"
    ]);
    }
}