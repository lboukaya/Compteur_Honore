<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Entity\Ingredientsrecettes;
use App\Entity\Recettes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HonoreController extends AbstractController
{
    /**
     * @Route("/honore", name="honore")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Recettes::class);
        $recettes = $repo->findAll();
        return $this->render('honore/index.html.twig', [
            'controller_name' => 'HonoreController',
            'recettes' => $recettes
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
     * @Route("/404", name="notFound")
     */
    public function notFound() {
        return $this->render('honore/404.html.twig', [

        ]);
    }

    /**
     * @Route("/403", name="noPermission")
     */
    public function noPersmission() {
        return $this->render('honore/403.html.twig', [

        ]);
    }

    /**
     * @Route("/recettes", name="recettes")
     */
    public function recettes() {
        $repo = $this->getDoctrine()->getRepository(Recettes::class);
        $recettes = $repo->findAll();
        return $this->render('honore/recettes.html.twig', [
            'controller_name' => 'HonoreController',
            'recettes' => $recettes
        ]);
    }

    /**
     * @Route("/recettes/{id}", name="recettes_show")
     */
    public function showRecette($id){
        $recette = $this->getDoctrine()
            ->getRepository(Recettes::class)
            ->find($id);
        $ingredientsrecettes = $this->getDoctrine()
            ->getRepository(Ingredientsrecettes::class)
            ->findAll();

        return $this->render('honore/recetteshow.html.twig', [
            'recette' => $recette,
            'ingredientsrecettes' => $ingredientsrecettes
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
