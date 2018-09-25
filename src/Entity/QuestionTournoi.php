<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionTournoiRepository")
 */
class QuestionTournoi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Point_Tournoi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPointTournoi(): ?int
    {
        return $this->Point_Tournoi;
    }

    public function setPointTournoi(?int $Point_Tournoi): self
    {
        $this->Point_Tournoi = $Point_Tournoi;

        return $this;
    }
}
