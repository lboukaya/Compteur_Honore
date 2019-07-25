<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HonoreController extends AbstractController
{
    /**
     * @Route("/honore", name="honore")
     */
    public function index()
    {
        return $this->render('honore/index.html.twig', [
            'controller_name' => 'HonoreController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {
        return $this->render('honore/home.html.twig', [

        ]);
    }

    /**
     * @Route("/recettes", name="recettes")
     */
    public function recettes() {
        return $this->render('honore/recettes.html.twig', [

        ]);
    }

    /**
     * @Route("/calculs", name="calculs")
     */
    public function calculs() {
        return $this->render('honore/calculs.html.twig', [

        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about() {
        return $this->render('honore/about.html.twig', [

        ]);
    }
}
