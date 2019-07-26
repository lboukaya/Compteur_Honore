<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Recettes
 *
 * @ORM\Table(name="recettes")
 * @ORM\Entity
 */
class Recettes
{

    /**
     * @ORM\ManyToMany(targetEntity=Ingredients::class)
     * @ORM\JoinTable(name="Ingredientsrecettes")
     * joinColumns={@JoinColumn(name="recette_id", referencedColumnName="ingredients_id")},
     * inverseJoinColumns={@JoinColumn(name="ingredients_id", referencedColumnName="ingredients_id", unique=true)}
     *
     */
    protected $ingredients;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }

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
     * @return mixed
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param mixed $ingredients
     */
    public function setIngredients($ingredients): void
    {
        $this->ingredients = $ingredients;
    }




}
