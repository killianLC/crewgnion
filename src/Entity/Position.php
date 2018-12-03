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
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="position")
     */
    private $questions;

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

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setPosition($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
            // set the owning side to null (unless already changed)
            if ($question->getPosition() === $this) {
                $question->setPosition(null);
            }
        }

        return $this;
    }
}
