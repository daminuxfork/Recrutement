<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

    /**
     * @Route("/product", name="product")
     */
    public function index(ProductRepository $productRepository)
    {
        $products = $productRepository->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }
}