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


}
