<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 * fields= {"email"}, message= "L'email que vous avez indiqué est déjà utilisé")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min="8", minMessage="Votre mot de passe doit faire minimum 8 caractères")
     * @Assert\EqualTo(propertyPath="confirm_password", message="Les 2 mots de passe sont différents")
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Les 2 mots de passe sont différents")
     */
    
    public $confirm_password;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Grade", inversedBy="users")
     */
    private $grade;   

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Participer", mappedBy="users")
     */
    private $participers;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Position", mappedBy="users")
     */
    private $positions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Questionnaire", mappedBy="users")
     */
    private $questionnaires;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $xp;

    /**
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $coin;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Accomplir", mappedBy="users")
     */
    private $accomplirs;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Resoudre", mappedBy="user")
     */
    private $resoudres;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Acquerir", mappedBy="user")
     */
    private $acquerirs;


    public function __construct()
    {
        $this->participers = new ArrayCollection();
        $this->positions = new ArrayCollection();
        $this->questionnaires = new ArrayCollection();
        $this->accomplirs = new ArrayCollection();
        $this->resoudres = new ArrayCollection();
        $this->acquerirs = new ArrayCollection();
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
     * @return Collection|Questionnaire[]
     */
    public function getQuestionnaires(): Collection
    {
        return $this->questionnaires;
    }

    public function addQuestionnaire(Questionnaire $questionnaire): self
    {
        if (!$this->questionnaires->contains($questionnaire)) {
            $this->questionnaires[] = $questionnaire;
            $questionnaire->addUser($this);
        }

        return $this;
    }

    public function removeQuestionnaire(Questionnaire $questionnaire): self
    {
        if ($this->questionnaires->contains($questionnaire)) {
            $this->questionnaires->removeElement($questionnaire);
            $questionnaire->removeUser($this);
        }

        return $this;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(?int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getCoin(): ?int
    {
        return $this->coin;
    }

    public function setCoin(?int $coin): self
    {
        $this->coin = $coin;

        return $this;
    }

    /**
     * @return Collection|Accomplir[]
     */
    public function getAccomplirs(): Collection
    {
        return $this->accomplirs;
    }

    public function addAccomplir(Accomplir $accomplir): self
    {
        if (!$this->accomplirs->contains($accomplir)) {
            $this->accomplirs[] = $accomplir;
            $accomplir->setUsers($this);
        }

        return $this;
    }

    public function removeAccomplir(Accomplir $accomplir): self
    {
        if ($this->accomplirs->contains($accomplir)) {
            $this->accomplirs->removeElement($accomplir);
            // set the owning side to null (unless already changed)
            if ($accomplir->getUsers() === $this) {
                $accomplir->setUsers(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Resoudre[]
     */
    public function getResoudres(): Collection
    {
        return $this->resoudres;
    }

    public function addResoudre(Resoudre $resoudre): self
    {
        if (!$this->resoudres->contains($resoudre)) {
            $this->resoudres[] = $resoudre;
            $resoudre->setUser($this);
        }

        return $this;
    }

    public function removeResoudre(Resoudre $resoudre): self
    {
        if ($this->resoudres->contains($resoudre)) {
            $this->resoudres->removeElement($resoudre);
            // set the owning side to null (unless already changed)
            if ($resoudre->getUser() === $this) {
                $resoudre->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Acquerir[]
     */
    public function getAcquerirs(): Collection
    {
        return $this->acquerirs;
    }

    public function addAcquerir(Acquerir $acquerir): self
    {
        if (!$this->acquerirs->contains($acquerir)) {
            $this->acquerirs[] = $acquerir;
            $acquerir->setUser($this);
        }

        return $this;
    }

    public function removeAcquerir(Acquerir $acquerir): self
    {
        if ($this->acquerirs->contains($acquerir)) {
            $this->acquerirs->removeElement($acquerir);
            // set the owning side to null (unless already changed)
            if ($acquerir->getUser() === $this) {
                $acquerir->setUser(null);
            }
        }

        return $this;
    }



}
