<?php

namespace App\Entity;


class Fidget
{
//<editor-fold desc="Variables">
    private $id;
    private $name;
    private $side;
    private $color;
    private $shape;
    private $pic;
//</editor-fold>

//<editor-fold desc="Setters">
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setSide(int $side)
    {
        $this->side = $side;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setShape(string $shape)
    {
        $this->shape = $shape;
    }

    public function setPic(string $pic)
    {
        $this->pic = $pic;
    }

//</editor-fold>

//<editor-fold desc="Getters">
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSide()
    {
        return $this->side;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getShape()
    {
        return $this->shape;
    }

    public function getPic()
{
    return $this->pic;
}
//</editor-fold>
}