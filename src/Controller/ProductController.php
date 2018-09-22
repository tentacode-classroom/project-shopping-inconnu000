<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="Product")
     */
    public function affichage($productId = 0)
    {
        $product = new Product();
        $product->id = $productId;
        $product->name = 'Toto';
        $fruits = [
            'banane',
            'pomme',
            'fraise',
        ];

        return $this->render('Product.html.twig', [
            'product_id' => $productId,
            'fruits' => $fruits
        ]);

        return $response;
    }
}
    class Product
    {
        public $id;
        public $name;
        public function upperName()
        {
            return strtoupper($this->name);
        }

}