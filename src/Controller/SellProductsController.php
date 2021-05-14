<?php

namespace App\Controller;

use App\Entity\ProductsToSell;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SellProductsController extends AbstractController
{
    /**
     *  @Route("/sell-your-products")
     */
    public function sellProducts()
    {
        return $this->render('sell-your-products/index.html.twig');
    }
}
