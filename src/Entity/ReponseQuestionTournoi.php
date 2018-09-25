<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponseQuestionTournoiRepository")
 */
class ReponseQuestionTournoi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle_reponse;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bonne_reponse_tournoi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleReponse(): ?string
    {
        return $this->libelle_reponse;
    }

    public function setLibelleReponse(string $libelle_reponse): self
    {
        $this->libelle_reponse = $libelle_reponse;

        return $this;
    }

    public function getBonneReponseTournoi(): ?bool
    {
        return $this->bonne_reponse_tournoi;
    }

    public function setBonneReponseTournoi(bool $bonne_reponse_tournoi): self
    {
        $this->bonne_reponse_tournoi = $bonne_reponse_tournoi;

        return $this;
    }
}
