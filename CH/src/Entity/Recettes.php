<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recettes
 *
 * @ORM\Table(name="recettes")
 * @ORM\Entity
 */
class Recettes
{

    /**
     * @var \Ingredients
     *
     * @ORM\ManyToOne(targetEntity="Ingredientsrecettes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="idIngredient")
     * })
     */
    private $ingredients;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
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
     * @return \Ingredients
     */
    public function getIngredients(): \Ingredients
    {
        return $this->ingredients;
    }

    /**
     * @param \Ingredients $ingredients
     */
    public function setIngredients(\Ingredients $ingredients): void
    {
        $this->ingredients = $ingredients;
    }


}
