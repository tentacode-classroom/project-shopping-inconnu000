<?php

namespace App\Controller;

use App\Entity\Fidget;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/product/{productId}", name="Product")
     */
    public function view($productId = 0)
    {

        $fidget = $this->getDoctrine();
        $repository= $fidget->getRepository(Fidget::class);
        $fidget = $repository->find($productId);

        $fidget->incrementViewCounter();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($fidget);
        $entityManager->flush();

        return $this->render('Product.html.twig', [
            'product_id' => $productId,
            'fidget' => $fidget,
        ]);

    }
}