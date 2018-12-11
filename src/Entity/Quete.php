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
    private $descriptif;

    /**
     * @ORM\Column(type="integer")
     */
    private $xp;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Resoudre", mappedBy="quete")
     */
    private $resoudres;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Acquerir", mappedBy="quete")
     */
    private $acquerirs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     */
    private $rayon;

    public function __construct()
    {
        $this->resoudres = new ArrayCollection();
        $this->acquerirs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getXp(): ?int
    {
        return $this->xp;
    }

    public function setXp(int $xp): self
    {
        $this->xp = $xp;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

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
            $resoudre->setQuete($this);
        }

        return $this;
    }

    public function removeResoudre(Resoudre $resoudre): self
    {
        if ($this->resoudres->contains($resoudre)) {
            $this->resoudres->removeElement($resoudre);
            // set the owning side to null (unless already changed)
            if ($resoudre->getQuete() === $this) {
                $resoudre->setQuete(null);
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
            $acquerir->setQuete($this);
        }

        return $this;
    }

    public function removeAcquerir(Acquerir $acquerir): self
    {
        if ($this->acquerirs->contains($acquerir)) {
            $this->acquerirs->removeElement($acquerir);
            // set the owning side to null (unless already changed)
            if ($acquerir->getQuete() === $this) {
                $acquerir->setQuete(null);
            }
        }

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRayon(): ?int
    {
        return $this->rayon;
    }

    public function setRayon(int $rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }
}
