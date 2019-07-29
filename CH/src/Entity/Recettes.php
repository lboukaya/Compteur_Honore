<?php

namespace App\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Recettes
 *
 * @ORM\Table(name="recettes")
 * @ORM\Entity(repositoryClass="App\Repository\RecettesRepository")
 */

class Recettes
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
     * @ORM\ManyToMany(targetEntity=Ingredients::class)
     * @ORM\JoinTable(name="Ingredientsrecettes")
     * joinColumns={@JoinColumn(name="ingredients_id", referencedColumnName="id")},
     * inverseJoinColumns={@JoinColumn(name="recettes_id", referencedColumnName="id")}
     *
     */
    protected $ingredients;

    public function __construct()
    {
        $this->ingredients = new ArrayCollection();
    }



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

    public function addIngredient(Ingredients $ingredient): self
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients[] = $ingredient;
        }

        return $this;
    }

    public function removeIngredient(Ingredients $ingredient): self
    {
        if ($this->ingredients->contains($ingredient)) {
            $this->ingredients->removeElement($ingredient);
        }

        return $this;
    }


    /**
     * @var \Unitesmesure
     *
     * @ORM\ManyToOne(targetEntity="Unitesmesure")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $unitesmesure;

    /**
     * @return App\Entity\Unitesmesure
     */
    public function getUnitesmesure(): ?string
    {
        return $this->unitesmesure;
    }

}
