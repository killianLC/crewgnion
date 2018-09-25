<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Contraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Quete", mappedBy="users")
     */
    private $quetes;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Grade", inversedBy="users")
     */
    private $grade;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Position", mappedBy="users")
     */
    private $positions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participer", mappedBy="users")
     */
    private $participers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RepondreTournoi", mappedBy="users")
     */
    private $repondreTournois;

    public function __construct()
    {
        $this->quetes = new ArrayCollection();
        $this->positions = new ArrayCollection();
        $this->participers = new ArrayCollection();
        $this->repondreTournois = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles()
    {
        return ['ROLE_USER'];
    }

    public function getSalt()
    {
        
    }

    public function eraseCredentials()
    {
    }

    /**
     * @return Collection|Quete[]
     */
    public function getQuetes(): Collection
    {
        return $this->quetes;
    }

    public function addQuete(Quete $quete): self
    {
        if (!$this->quetes->contains($quete)) {
            $this->quetes[] = $quete;
            $quete->addUser($this);
        }

        return $this;
    }

    public function removeQuete(Quete $quete): self
    {
        if ($this->quetes->contains($quete)) {
            $this->quetes->removeElement($quete);
            $quete->removeUser($this);
        }

        return $this;
    }

    public function getGrade(): ?Grade
    {
        return $this->grade;
    }

    public function setGrade(?Grade $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * @return Collection|Position[]
     */
    public function getPositions(): Collection
    {
        return $this->positions;
    }

    public function addPosition(Position $position): self
    {
        if (!$this->positions->contains($position)) {
            $this->positions[] = $position;
            $position->addUser($this);
        }

        return $this;
    }

    public function removePosition(Position $position): self
    {
        if ($this->positions->contains($position)) {
            $this->positions->removeElement($position);
            $position->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection|Participer[]
     */
    public function getParticipers(): Collection
    {
        return $this->participers;
    }

    public function addParticiper(Participer $participer): self
    {
        if (!$this->participers->contains($participer)) {
            $this->participers[] = $participer;
            $participer->setUsers($this);
        }

        return $this;
    }

    public function removeParticiper(Participer $participer): self
    {
        if ($this->participers->contains($participer)) {
            $this->participers->removeElement($participer);
            // set the owning side to null (unless already changed)
            if ($participer->getUsers() === $this) {
                $participer->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RepondreTournoi[]
     */
    public function getRepondreTournois(): Collection
    {
        return $this->repondreTournois;
    }

    public function addRepondreTournois(RepondreTournoi $repondreTournois): self
    {
        if (!$this->repondreTournois->contains($repondreTournois)) {
            $this->repondreTournois[] = $repondreTournois;
            $repondreTournois->setUsers($this);
        }

        return $this;
    }

    public function removeRepondreTournois(RepondreTournoi $repondreTournois): self
    {
        if ($this->repondreTournois->contains($repondreTournois)) {
            $this->repondreTournois->removeElement($repondreTournois);
            // set the owning side to null (unless already changed)
            if ($repondreTournois->getUsers() === $this) {
                $repondreTournois->setUsers(null);
            }
        }

        return $this;
    }
}
