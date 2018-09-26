<?php

namespace App\Controller;

use App\Repository\FidgetRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="Product")
     */
    public function view($productId = 0)
    {

        $fidgetRepository = new FidgetRepository();
        $fidget = $fidgetRepository->findOneById($productId);


        return $this->render('Product.html.twig', [
            'product_id' => $productId,
            'fidget' => $fidget,
        ]);

    }
}