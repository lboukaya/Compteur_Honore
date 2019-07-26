<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredientsrecettesperso
 *
 * @ORM\Table(name="ingredientsRecettesPerso", indexes={@ORM\Index(name="idRecettePerso", columns={"idRecettePerso"}), @ORM\Index(name="ingredientsPerso", columns={"idIngredientsPerso"}), @ORM\Index(name="idIngredient", columns={"idIngredient"})})
 * @ORM\Entity
 */
class Ingredientsrecettesperso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="qteIngredient", type="float", precision=10, scale=0, nullable=false)
     */
    private $qteingredient;

    /**
     * @var \Ingredientsperso
     *
     * @ORM\ManyToOne(targetEntity="Ingredientsperso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idIngredientsPerso", referencedColumnName="id")
     * })
     */
    private $idingredientsperso;

    /**
     * @var \Ingredients
     *
     * @ORM\ManyToOne(targetEntity="Ingredients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idIngredient", referencedColumnName="ingredients_id")
     * })
     */
    private $idingredient;

    /**
     * @var \Recettesperso
     *
     * @ORM\ManyToOne(targetEntity="Recettesperso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRecettePerso", referencedColumnName="id")
     * })
     */
    private $idrecetteperso;


}
