<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TypeRepository")
 */
class Type
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Close", mappedBy="type")
     */
    private $closes;

    public function __construct()
    {
        $this->closes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Close[]
     */
    public function getCloses(): Collection
    {
        return $this->closes;
    }

    public function addClose(Close $close): self
    {
        if (!$this->closes->contains($close)) {
            $this->closes[] = $close;
            $close->setType($this);
        }

        return $this;
    }

    public function removeClose(Close $close): self
    {
        if ($this->closes->contains($close)) {
            $this->closes->removeElement($close);
            // set the owning side to null (unless already changed)
            if ($close->getType() === $this) {
                $close->setType(null);
            }
        }

        return $this;
    }
}
