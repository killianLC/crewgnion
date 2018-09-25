<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PositionRepository")
 */
class Position
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Latitude_Position;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Longitude_Position;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="positions")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QuestionApp", mappedBy="positions")
     */
    private $questionApps;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->questionApps = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLatitudePosition(): ?int
    {
        return $this->Latitude_Position;
    }

    public function setLatitudePosition(int $Latitude_Position): self
    {
        $this->Latitude_Position = $Latitude_Position;

        return $this;
    }

    public function getLongitudePosition(): ?int
    {
        return $this->Longitude_Position;
    }

    public function setLongitudePosition(int $Longitude_Position): self
    {
        $this->Longitude_Position = $Longitude_Position;

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

    /**
     * @return Collection|QuestionApp[]
     */
    public function getQuestionApps(): Collection
    {
        return $this->questionApps;
    }

    public function addQuestionApp(QuestionApp $questionApp): self
    {
        if (!$this->questionApps->contains($questionApp)) {
            $this->questionApps[] = $questionApp;
            $questionApp->setPositions($this);
        }

        return $this;
    }

    public function removeQuestionApp(QuestionApp $questionApp): self
    {
        if ($this->questionApps->contains($questionApp)) {
            $this->questionApps->removeElement($questionApp);
            // set the owning side to null (unless already changed)
            if ($questionApp->getPositions() === $this) {
                $questionApp->setPositions(null);
            }
        }

        return $this;
    }
}
