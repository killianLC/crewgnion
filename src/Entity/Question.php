<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
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
    private $Libelle_Question;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Experience;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Point_Gagne;

    /**
     * @ORM\Column(type="boolean")
     */
    private $IsTournoi;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Reponse", mappedBy="question", orphanRemoval=true)
     */
    private $reponses;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Questionnaire", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $questionnaires;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Position", inversedBy="questions")
     */
    private $position;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tournoi", mappedBy="questions")
     */
    private $tournois;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
        $this->tournois = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleQuestion(): ?string
    {
        return $this->Libelle_Question;
    }

    public function setLibelleQuestion(string $Libelle_Question): self
    {
        $this->Libelle_Question = $Libelle_Question;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->Experience;
    }

    public function setExperience(?int $Experience): self
    {
        $this->Experience = $Experience;

        return $this;
    }

    public function getPointGagne(): ?int
    {
        return $this->Point_Gagne;
    }

    public function setPointGagne(?int $Point_Gagne): self
    {
        $this->Point_Gagne = $Point_Gagne;

        return $this;
    }

    public function getIsTournoi(): ?bool
    {
        return $this->IsTournoi;
    }

    public function setIsTournoi(bool $IsTournoi): self
    {
        $this->IsTournoi = $IsTournoi;

        return $this;
    }

    /**
     * @return Collection|Reponse[]
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setQuestion($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->contains($reponse)) {
            $this->reponses->removeElement($reponse);
            // set the owning side to null (unless already changed)
            if ($reponse->getQuestion() === $this) {
                $reponse->setQuestion(null);
            }
        }

        return $this;
    }

    public function getQuestionnaires(): ?Questionnaire
    {
        return $this->questionnaires;
    }

    public function setQuestionnaires(?Questionnaire $questionnaires): self
    {
        $this->questionnaires = $questionnaires;

        return $this;
    }

    public function getPosition(): ?Position
    {
        return $this->position;
    }

    public function setPosition(?Position $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return Collection|Tournoi[]
     */
    public function getTournois(): Collection
    {
        return $this->tournois;
    }

    public function addTournois(Tournoi $tournois): self
    {
        if (!$this->tournois->contains($tournois)) {
            $this->tournois[] = $tournois;
            $tournois->addQuestion($this);
        }

        return $this;
    }

    public function removeTournois(Tournoi $tournois): self
    {
        if ($this->tournois->contains($tournois)) {
            $this->tournois->removeElement($tournois);
            $tournois->removeQuestion($this);
        }

        return $this;
    }
}
