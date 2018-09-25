<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionAppRepository")
 */
class QuestionApp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Experience;

    /**
     * @ORM\Column(type="integer")
     */
    private $Point_Gagne;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Position", inversedBy="questionApps")
     */
    private $positions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExperience(): ?int
    {
        return $this->Experience;
    }

    public function setExperience(int $Experience): self
    {
        $this->Experience = $Experience;

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

    public function getPositions(): ?Position
    {
        return $this->positions;
    }

    public function setPositions(?Position $positions): self
    {
        $this->positions = $positions;

        return $this;
    }
}
