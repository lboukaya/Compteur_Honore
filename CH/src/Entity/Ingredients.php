<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients", indexes={@ORM\Index(name="unite_mesure", columns={"unitesMesure"})})
 * @ORM\Entity
 */
class Ingredients
{
    /**
     * @var int
     *
     * @ORM\Column(name="ingredients_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ingredients_id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var \Unitesmesure
     *
     * @ORM\ManyToOne(targetEntity="Unitesmesure")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="unitesMesure", referencedColumnName="id")
     * })
     */
    private $unitesmesure;

    /**
     * @var int
     *
     * @ORM\JoinTable(name="Ingredientsrecettes")
     * })
     */
    private $quantite;

    /**
     * @return int
     */
    public function getIngredients_id(): int
    {
        return $this->ingredients_id;
    }

    /**
     * @param int $ingredients_id
     */
    public function setIngredients_id(int $ingredients_id): void
    {
        $this->ingredients_id = $ingredients_id;
    }

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
     * @return \Unitesmesure
     */
    public function getUnitesmesure(): \Unitesmesure
    {
        return $this->unitesmesure;
    }

    /**
     * @param \Unitesmesure $unitesmesure
     */
    public function setUnitesmesure(\Unitesmesure $unitesmesure): void
    {
        $this->unitesmesure = $unitesmesure;
    }

    /**
     * @return int
     */
    public function getQuantite(): int
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite(int $quantite): void
    {
        $this->quantite = $quantite;
    }


}
