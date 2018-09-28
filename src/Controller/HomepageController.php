<?php

namespace App\Controller;

use App\Entity\Fidget;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name = "homepage")
     */
    public function view()
    {

        $doctrine = $this->getDoctrine();
        $repository=$doctrine->getRepository(Fidget::class);
        $productId = $repository->OrderByName();

        dump($productId);


        return $this->render('Homepage.html.twig',
            ['products' => $productId]
            );
    }
}