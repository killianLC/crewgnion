<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionnaireRepository")
 */
class Questionnaire
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
    private $libelle_questionnaire;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="questionnaires", orphanRemoval=true)
     */
    private $questions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="questionnaires")
     */
    private $users;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleQuestionnaire(): ?string
    {
        return $this->libelle_questionnaire;
    }

    public function setLibelleQuestionnaire(string $libelle_questionnaire): self
    {
        $this->libelle_questionnaire = $libelle_questionnaire;

        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setQuestionnaires($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
            // set the owning side to null (unless already changed)
            if ($question->getQuestionnaires() === $this) {
                $question->setQuestionnaires(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
        }

        return $this;
    }
}
