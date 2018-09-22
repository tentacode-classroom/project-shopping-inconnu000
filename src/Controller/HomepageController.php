<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name = "homepage")
     */
    public function affichage()
    {
        $products=  [
            [
                'id' => 1,
                'name' => 'Hand Spinner 1'
            ],
            [
                'id' => 2,
                'name' => 'Hand Spinner 2'
            ],
            [
                'id' => 3,
                'name' => 'Hand Spinner 3'
            ]

        ];
        return $this->render('Homepage.html.twig',
            ['products' => $products]
            );
    }
}