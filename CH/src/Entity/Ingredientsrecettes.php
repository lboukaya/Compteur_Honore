<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredientsrecettes
 *
 * @ORM\Table(name="ingredientsRecettes", indexes={@ORM\Index(name="recette_id", columns={"recette_id", "ingredients_id"}), @ORM\Index(name="ingredients_id", columns={"ingredients_id"}), @ORM\Index(name="IDX_4FDA44359020862", columns={"recette_id"})})
 * @ORM\Entity
 */
class Ingredientsrecettes
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
     * @var \Recettes
     *
     * @ORM\ManyToOne(targetEntity="Recettes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recettes_id", referencedColumnName="id")
     * })
     */
    private $recette;

    /**
     * @var \Ingredients
     *
     * @ORM\ManyToOne(targetEntity="Ingredients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ingredients_id", referencedColumnName="ingredients_id")
     * })
     */
    private $ingredient;

    /**
     * @ORM\Column(name="quantite", type="float", nullable=false)
     */
    private $quantite;

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \Recettes
     */
    public function getRecette(): \Recettes
    {
        return $this->recette;
    }

    /**
     * @param \Recettes $idrecette
     */
    public function setRecette(\Recettes $recette): void
    {
        $this->recette = $recette;
    }

    /**
     * @return \Ingredients
     */
    public function getIngredient(): \Ingredients
    {
        return $this->ingredient;
    }

    /**
     * @param \Ingredients $idingredient
     */
    public function setIngredient(\Ingredients $ingredient): void
    {
        $this->ingredient = $ingredient;
    }


}
