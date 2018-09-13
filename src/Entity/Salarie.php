<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SalarieRepository")
 */
class Salarie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomsalarie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenomsalarie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomsalarie(): ?string
    {
        return $this->nomsalarie;
    }

    public function setNomsalarie(?string $nomsalarie): self
    {
        $this->nomsalarie = $nomsalarie;

        return $this;
    }

    public function getPrenomsalarie(): ?string
    {
        return $this->prenomsalarie;
    }

    public function setPrenomsalarie(?string $prenomsalarie): self
    {
        $this->prenomsalarie = $prenomsalarie;

        return $this;
    }
}
