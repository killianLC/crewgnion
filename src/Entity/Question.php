<?php

namespace App\Entity;

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
    private $libelle_question;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Questionnaire", inversedBy="questions")
     */
    private $questionnaires;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleQuestion(): ?string
    {
        return $this->libelle_question;
    }

    public function setLibelleQuestion(string $libelle_question): self
    {
        $this->libelle_question = $libelle_question;

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
}
