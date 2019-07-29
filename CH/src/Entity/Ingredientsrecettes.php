<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredientsrecettes
 *
 * @ORM\Table(name="ingredientsRecettes", indexes={@ORM\Index(name="recette_id", columns={"recette_id"}), @ORM\Index(name="ingredients_id", columns={"ingredients_id"}), @ORM\Index(name="IDX_4FDA44359020862", columns={"recette_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\IngredientsrecettesRepository")
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
    private $recette_id;

    /**
     * @var \Ingredients
     *
     * @ORM\ManyToOne(targetEntity="Ingredients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ingredients_id", referencedColumnName="id")
     * })
     */
    private $ingredient_id;

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
    public function getRecette_id(): \Recettes
    {
        return $this->recette_id;
    }

    /**
     * @param \Recettes $idrecette_id
     */
    public function setRecette_id(\Recettes $recette_id): void
    {
        $this->recette_id = $recette_id;
    }

    /**
     * @return \Ingredients
     */
    public function getIngredient(): \Ingredients
    {
        return $this->ingredient_id;
    }

    /**
     * @param \Ingredients $idingredient
     */
    public function setIngredient(\Ingredients $ingredient): void
    {
        $this->ingredient = $ingredient;
    }

    public function getRecetteId(): \Recettes
    {
        return $this->recette_id;
    }

    public function setRecetteId(?Recettes $recette_id): self
    {
        $this->recette_id = $recette_id;

        return $this;
    }

    public function getIngredientId(): \Ingredients
    {
        return $this->ingredient_id;
    }

    public function setIngredientId(?Ingredients $ingredient_id): self
    {
        $this->ingredient_id = $ingredient_id;

        return $this;
    }


}
