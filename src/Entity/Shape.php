<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShapeRepository")
 */
class Shape
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
     * @ORM\OneToMany(targetEntity="App\Entity\Fidget", mappedBy="shape", orphanRemoval=true)
     */
    private $fidgets;

    public function __construct()
    {
        $this->fidgets = new ArrayCollection();
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
     * @return Collection|Fidget[]
     */
    public function getFidgets(): Collection
    {
        return $this->fidgets;
    }

    public function addFidget(Fidget $fidget): self
    {
        if (!$this->fidgets->contains($fidget)) {
            $this->fidgets[] = $fidget;
            $fidget->setShape($this);
        }

        return $this;
    }

    public function removeFidget(Fidget $fidget): self
    {
        if ($this->fidgets->contains($fidget)) {
            $this->fidgets->removeElement($fidget);
            // set the owning side to null (unless already changed)
            if ($fidget->getShape() === $this) {
                $fidget->setShape(null);
            }
        }

        return $this;
    }
}
