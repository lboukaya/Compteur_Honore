<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boulangerie
 *
 * @ORM\Table(name="boulangerie", indexes={@ORM\Index(name="recette_perso", columns={"recettePerso"}), @ORM\Index(name="recette", columns={"recette"})})
 * @ORM\Entity
 */
class Boulangerie
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
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="poids", type="integer", nullable=false)
     */
    private $poids;

    /**
     * @var \Recettesperso
     *
     * @ORM\ManyToOne(targetEntity="Recettesperso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recettePerso", referencedColumnName="id")
     * })
     */
    private $recetteperso;

    /**
     * @var \Recettes
     *
     * @ORM\ManyToOne(targetEntity="Recettes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recette", referencedColumnName="id")
     * })
     */
    private $recette;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getRecetteperso(): ?Recettesperso
    {
        return $this->recetteperso;
    }

    public function setRecetteperso(?Recettesperso $recetteperso): self
    {
        $this->recetteperso = $recetteperso;

        return $this;
    }

    public function getRecette(): ?Recettes
    {
        return $this->recette;
    }

    public function setRecette(?Recettes $recette): self
    {
        $this->recette = $recette;

        return $this;
    }


}
