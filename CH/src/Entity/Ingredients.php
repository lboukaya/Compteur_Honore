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
     * @var \Unitesmesure
     *
     * @ORM\ManyToOne(targetEntity="Unitesmesure")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="unitesMesure", referencedColumnName="id")
     * })
     */
    private $unitesmesure;



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

//    /**
//     * @return \Unitesmesure
//     */
//    public function getUnitesmesure(): \Unitesmesure
//    {
//        return $this->unitesmesure;
//    }


    /**
     * @return int
     */
    public function getQuantite(): ?int
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

    public function setUnitesmesure(?Unitesmesure $unitesmesure): self
    {
        $this->unitesmesure = $unitesmesure;

        return $this;
    }


}
