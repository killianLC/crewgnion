<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RepondreRepository")
 */
class Repondre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reponse")
     */
    private $reponses;

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getReponses(): ?Reponse
    {
        return $this->reponses;
    }

    public function setReponses(?Reponse $reponses): self
    {
        $this->reponses = $reponses;

        return $this;
    }

    
}
