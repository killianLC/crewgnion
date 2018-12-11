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
     * @ORM\Column(type="float")
     */
    private $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private $longitude;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Accomplir", mappedBy="positions")
     */
    private $accomplirs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ville", inversedBy="positions")
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     */
    private $rayon;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Question", cascade={"persist", "remove"})
     */
    private $question;

    public function __construct()
    {
        $this->accomplirs = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $accomplir->setPositions($this);
        }

        return $this;
    }

    public function removeAccomplir(Accomplir $accomplir): self
    {
        if ($this->accomplirs->contains($accomplir)) {
            $this->accomplirs->removeElement($accomplir);
            // set the owning side to null (unless already changed)
            if ($accomplir->getPositions() === $this) {
                $accomplir->setPositions(null);
            }
        }

        return $this;
    }

    

    public function getVille(): ?Ville
    {
        return $this->ville;
    }

    public function setVille(?Ville $ville): self
    {
        $this->ville = $ville;

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

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }
}
