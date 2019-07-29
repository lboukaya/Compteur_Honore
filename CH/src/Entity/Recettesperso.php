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

    public function getIngredients(): ?int
    {
        return $this->ingredients;
    }

    public function setIngredients(int $ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getIngredientsperso(): ?int
    {
        return $this->ingredientsperso;
    }

    public function setIngredientsperso(int $ingredientsperso): self
    {
        $this->ingredientsperso = $ingredientsperso;

        return $this;
    }

    public function getIdutilisateur(): ?User
    {
        return $this->idutilisateur;
    }

    public function setIdutilisateur(?User $idutilisateur): self
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }


}
