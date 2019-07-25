<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recettesperso
 *
 * @ORM\Table(name="recettesPerso", indexes={@ORM\Index(name="ingredientsPerso", columns={"ingredientsPerso"}), @ORM\Index(name="idUtilisateur", columns={"idUtilisateur", "ingredients"}), @ORM\Index(name="ingredients", columns={"ingredients"}), @ORM\Index(name="IDX_F03998FE5D419CCB", columns={"idUtilisateur"})})
 * @ORM\Entity
 */
class Recettesperso
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
     * @ORM\Column(name="ingredients", type="integer", nullable=false)
     */
    private $ingredients;

    /**
     * @var int
     *
     * @ORM\Column(name="ingredientsPerso", type="integer", nullable=false)
     */
    private $ingredientsperso;

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
