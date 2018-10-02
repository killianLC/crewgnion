<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponseRepository")
 */
class Reponse
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
    private $Libelle_reponse;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $reponse_bonne;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question", inversedBy="reponses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleReponse(): ?string
    {
        return $this->Libelle_reponse;
    }

    public function setLibelleReponse(string $Libelle_reponse): self
    {
        $this->Libelle_reponse = $Libelle_reponse;

        return $this;
    }

    public function getReponseBonne(): ?bool
    {
        return $this->reponse_bonne;
    }

    public function setReponseBonne(?bool $reponse_bonne): self
    {
        $this->reponse_bonne = $reponse_bonne;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }
}
