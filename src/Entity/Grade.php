<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GradeRepository")
 */
class Grade
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
    private $Nom_Grade;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="grade")
     */
    private $users;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\Column(type="integer")
     */
    private $pointMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $pointMin;


    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGrade(): ?string
    {
        return $this->Nom_Grade;
    }

    public function setNomGrade(string $Nom_Grade): self
    {
        $this->Nom_Grade = $Nom_Grade;

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
            $user->setGrade($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getGrade() === $this) {
                $user->setGrade(null);
            }
        }

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getPointMax(): ?int
    {
        return $this->pointMax;
    }

    public function setPointMax(int $pointMax): self
    {
        $this->pointMax = $pointMax;

        return $this;
    }

    public function getPointMin(): ?int
    {
        return $this->pointMin;
    }

    public function setPointMin(int $pointMin): self
    {
        $this->pointMin = $pointMin;

        return $this;
    }

}
