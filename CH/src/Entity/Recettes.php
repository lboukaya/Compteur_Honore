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


}
