<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unitesmesure
 *
 * @ORM\Table(name="unitesMesure")
 * @ORM\Entity
 */
class Unitesmesure
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
     * @var string
     *
     * @ORM\Column(name="abreviation", type="text", length=65535, nullable=false)
     */
    private $abreviation;

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

    /**
     * @return string
     */
    public function getAbreviation(): string
    {
        return $this->abreviation;
    }

    /**
     * @param string $abreviation
     */
    public function setAbreviation(string $abreviation): void
    {
        $this->abreviation = $abreviation;
    }


}
