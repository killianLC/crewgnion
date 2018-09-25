<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParticiperRepository")
 */
class Participer
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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="participers")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tournoi", inversedBy="participers")
     */
    private $tournois;

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

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getTournois(): ?Tournoi
    {
        return $this->tournois;
    }

    public function setTournois(?Tournoi $tournois): self
    {
        $this->tournois = $tournois;

        return $this;
    }
}
