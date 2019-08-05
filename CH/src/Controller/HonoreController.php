<?php

namespace App\Controller;

use App\Entity\Ingredients;
use App\Entity\Ingredientsrecettes;
use App\Entity\Recettes;
use App\Entity\Recettesperso;
use App\Entity\User;
use App\Form\AddFormType;
use App\Form\AddRecetteType;
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
        return $this->render('exception/error404.html.twig', [

        ]);
    }

    /**
     * @Route("/403", name="noPermission")
     */
    public function noPersmission() {
        return $this->render('exception/error403.html.twig', [

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
            'recettes' => $recettes,
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


        $quantitesIngredients = $this->getDoctrine()
            ->getRepository(Ingredientsrecettes::class)
            ->findByRecetteId($recettesid);

        return $this->render('honore/recetteshow.html.twig', [
            'recette' => $recette,
            'quantitesIngredients' => $quantitesIngredients,
        ]);

    }

    /**
     * @Route("/add", name="add_recette")
     */
    public function addRecette(Request $request, ObjectManager $manager){
        $newRecette = new Recettesperso();

        $form = $this->createForm(AddRecetteType::class, $newRecette);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $manager->persist($newRecette);
            $manager->flush();

            return $this->redirectToRoute('recettes');
        }

        return $this->render('honore/addrecette.html.twig', [
            'form' => $form->createView()
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
        $rss = simplexml_load_file('https://www.boulangerie.org/feed/');

        return $this->render('honore/actualites.html.twig', array(
            'rss' => $rss,
        ));
    }
}
