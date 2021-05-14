<?php

namespace App\Controller;

use App\Entity\ProductsToBuy;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductsToBuyController extends AbstractController
{
    /**
     *  @Route("/products-to-buy")
     */
    public function productsToBuy()
    {
        return $this->render('products-to-buy/index.html.twig');
    }
}
