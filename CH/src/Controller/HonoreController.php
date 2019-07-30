<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Entity\Ingredientsrecettes;
use App\Entity\Recettes;
use App\Entity\Recettesperso;
use App\Entity\User;
use App\Form\AddFormType;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
        return $this->render('exception/404.html.twig', [

        ]);
    }

    /**
     * @Route("/403", name="noPermission")
     */
    public function noPersmission() {
        return $this->render('exception/403.html.twig', [

        ]);
    }

    /**
     * @Route("/recettes", name="recettes")
     */
    public function recettes() {
        $repo = $this->getDoctrine()->getRepository(Recettes::class);
        $recettes = $repo->findAll();
        $repo2 = $this->getDoctrine()->getRepository(Recettesperso::class);
        $recettesperso = $repo2->findAll();

        return $this->render('honore/recettes.html.twig', [
            'controller_name' => 'HonoreController',
            'recettes' => $recettes,
            'recettesperso' => $recettesperso
        ]);
    }

    /**
     * @Route("/recettes/{id}", name="recettes_show")
     */
    public function showRecette($id){
        $recette = $this->getDoctrine()
            ->getRepository(Recettes::class)
            ->find($id);
        $recettesid = $id;

        $recetteperso = $this->getDoctrine()
            ->getRepository(Recettesperso::class)
            ->find($id);

        $quantitesIngredients = $this->getDoctrine()
            ->getRepository(Ingredientsrecettes::class)
            ->findByRecetteId($recettesid);

        return $this->render('honore/recetteshow.html.twig', [
            'recette' => $recette,
            'quantitesIngredients' => $quantitesIngredients,
            'recetteperso' => $recetteperso
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
     * @Route("/actualites", name="actualites")
     */

    public function viewRSSAction(Request $request){
        $rss = simplexml_load_file('http://plus.lefigaro.fr/tag/boulangerie/rss.xml');

        return $this->render('honore/actualites.html.twig', array(
            'rss' => $rss,
        ));
    }
}
