<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ingredientsperso
 *
 * @ORM\Table(name="ingredientsPerso", indexes={@ORM\Index(name="idUtilisateur", columns={"idUtilisateur"}), @ORM\Index(name="uniteMesure", columns={"uniteMesure"})})
 * @ORM\Entity
 */
class Ingredientsperso
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

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="id")
     * })
     */
    private $idutilisateur;


}
