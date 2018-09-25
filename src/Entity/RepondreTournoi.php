<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RepondreTournoiRepository")
 */
class RepondreTournoi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="repondreTournois")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ReponseQuestionTournoi", inversedBy="repondreTournois")
     */
    private $ReponseQuestionTournois;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getReponseQuestionTournois(): ?ReponseQuestionTournoi
    {
        return $this->ReponseQuestionTournois;
    }

    public function setReponseQuestionTournois(?ReponseQuestionTournoi $ReponseQuestionTournois): self
    {
        $this->ReponseQuestionTournois = $ReponseQuestionTournois;

        return $this;
    }
}
