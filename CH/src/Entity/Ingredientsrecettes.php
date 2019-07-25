<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredientsrecettes
 *
 * @ORM\Table(name="ingredientsRecettes", indexes={@ORM\Index(name="idRecette", columns={"idRecette", "idIngredient"}), @ORM\Index(name="idIngredient", columns={"idIngredient"}), @ORM\Index(name="IDX_4FDA44359020862", columns={"idRecette"})})
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
     *   @ORM\JoinColumn(name="idRecette", referencedColumnName="id")
     * })
     */
    private $idrecette;

    /**
     * @var \Ingredients
     *
     * @ORM\ManyToOne(targetEntity="Ingredients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idIngredient", referencedColumnName="id")
     * })
     */
    private $idingredient;

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
    public function getIdrecette(): \Recettes
    {
        return $this->idrecette;
    }

    /**
     * @param \Recettes $idrecette
     */
    public function setIdrecette(\Recettes $idrecette): void
    {
        $this->idrecette = $idrecette;
    }

    /**
     * @return \Ingredients
     */
    public function getIdingredient(): \Ingredients
    {
        return $this->idingredient;
    }

    /**
     * @param \Ingredients $idingredient
     */
    public function setIdingredient(\Ingredients $idingredient): void
    {
        $this->idingredient = $idingredient;
    }


}
