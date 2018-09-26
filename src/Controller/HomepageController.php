<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\FidgetRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name = "homepage")
     */
    public function view()
    {
        $fidgetRepository = new FidgetRepository();
        $fidgets = $fidgetRepository->findAll();


        return $this->render('Homepage.html.twig',
            ['products' => $fidgets]
            );
    }
}