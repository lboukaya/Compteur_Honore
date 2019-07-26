<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boulangerieperso
 *
 * @ORM\Table(name="boulangeriePerso", indexes={@ORM\Index(name="idUtilisateur", columns={"idUtilisateur"}), @ORM\Index(name="recettePerso", columns={"recettePerso"})})
 * @ORM\Entity
 */
class Boulangerieperso
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUtilisateur", referencedColumnName="id")
     * })
     */
    private $idutilisateur;

    /**
     * @var \Recettesperso
     *
     * @ORM\ManyToOne(targetEntity="Recettesperso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recettePerso", referencedColumnName="id")
     * })
     */
    private $recetteperso;


}
