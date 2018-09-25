<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RepondreTournoi", mappedBy="ReponseQuestionTournois")
     */
    private $repondreTournois;

    public function __construct()
    {
        $this->repondreTournois = new ArrayCollection();
    }

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

    /**
     * @return Collection|RepondreTournoi[]
     */
    public function getRepondreTournois(): Collection
    {
        return $this->repondreTournois;
    }

    public function addRepondreTournois(RepondreTournoi $repondreTournois): self
    {
        if (!$this->repondreTournois->contains($repondreTournois)) {
            $this->repondreTournois[] = $repondreTournois;
            $repondreTournois->setReponseQuestionTournois($this);
        }

        return $this;
    }

    public function removeRepondreTournois(RepondreTournoi $repondreTournois): self
    {
        if ($this->repondreTournois->contains($repondreTournois)) {
            $this->repondreTournois->removeElement($repondreTournois);
            // set the owning side to null (unless already changed)
            if ($repondreTournois->getReponseQuestionTournois() === $this) {
                $repondreTournois->setReponseQuestionTournois(null);
            }
        }

        return $this;
    }
}
