<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredients
 *
 * @ORM\Table(name="ingredients", indexes={@ORM\Index(name="unite_mesure", columns={"uniteMesure"})})
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
     *   @ORM\JoinColumn(name="uniteMesure", referencedColumnName="id")
     * })
     */
    private $unitemesure;


}
