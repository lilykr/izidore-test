<?php

namespace App\Controller;

use App\Entity\Home;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     *  @Route("/")
     */
    public function home()
    {
        return $this->render('home/index.html.twig');
    }
}
