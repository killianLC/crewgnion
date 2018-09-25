<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QueteRepository")
 */
class Quete
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
    private $Descriptif_Quete;

    /**
     * @ORM\Column(type="integer")
     */
    private $Point_Gagne;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Prix;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Latitude_Quete;

    /**
     * @ORM\Column(type="bigint")
     */
    private $Longitude_Quete;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $Rayon_Activation_Quete;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", inversedBy="quetes")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptifQuete(): ?string
    {
        return $this->Descriptif_Quete;
    }

    public function setDescriptifQuete(string $Descriptif_Quete): self
    {
        $this->Descriptif_Quete = $Descriptif_Quete;

        return $this;
    }

    public function getPointGagne(): ?int
    {
        return $this->Point_Gagne;
    }

    public function setPointGagne(int $Point_Gagne): self
    {
        $this->Point_Gagne = $Point_Gagne;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(?int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getLatitudeQuete(): ?int
    {
        return $this->Latitude_Quete;
    }

    public function setLatitudeQuete(int $Latitude_Quete): self
    {
        $this->Latitude_Quete = $Latitude_Quete;

        return $this;
    }

    public function getLongitudeQuete(): ?int
    {
        return $this->Longitude_Quete;
    }

    public function setLongitudeQuete(int $Longitude_Quete): self
    {
        $this->Longitude_Quete = $Longitude_Quete;

        return $this;
    }

    public function getRayonActivationQuete(): ?int
    {
        return $this->Rayon_Activation_Quete;
    }

    public function setRayonActivationQuete(?int $Rayon_Activation_Quete): self
    {
        $this->Rayon_Activation_Quete = $Rayon_Activation_Quete;

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
