<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FidgetRepository")
 */
class Fidget
{
    //<editor-fold desc="Variables">
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $side;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $color;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pic;

    /**
     * @ORM\Column(type="integer")
     */
    private $viewCounter;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Shape", inversedBy="fidgets")
     * @ORM\JoinColumn(nullable=false)
     */
    private $shape;
    //</editor-fold>

    //<editor-fold desc="Getters and Setters">

    //<editor-fold desc="Getters">
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getSide(): ?int
    {
        return $this->side;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function getShape(): ?Shape
    {
        return $this->shape;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPic(): ?string
    {
        return $this->pic;
    }

    public function getViewCounter(): ?int
    {
        return $this->viewCounter;
    }
    //</editor-fold>

    //<editor-fold desc="Setters">
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setSide(int $side): self
    {
        $this->side = $side;

        return $this;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function setShape(?Shape $shape): self
    {
        $this->shape = $shape;

        return $this;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function setPic(string $pic): self
    {
        $this->pic = $pic;

        return $this;
    }

    public function setViewCounter(int $viewCounter): self
    {
        $this->viewCounter = $viewCounter;

        return $this;
    }
    //</editor-fold>

    //</editor-fold>

    public function incrementViewCounter()
    {
        $this->viewCounter++;
    }
}
