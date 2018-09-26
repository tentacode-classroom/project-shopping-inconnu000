<?php

namespace App\Repository;
use App\Entity\Fidget;


class FidgetRepository
{
    private $fidgets;

    public function __construct()
    {
        $fidget1 = new Fidget();
        $fidget1->setId(1);
        $fidget1->setName("classic");
        $fidget1->setSide(3);
        $fidget1->setColor("red");
        $fidget1->setShape("classic");

        $fidget2 = new Fidget();
        $fidget2->setId(2);
        $fidget2->setName("atom");
        $fidget2->setSide(6);
        $fidget2->setColor("rainbow");
        $fidget2->setShape("atom");

        $fidget3 = new Fidget();
        $fidget3->setId(3);
        $fidget3->setName("dragon");
        $fidget3->setSide(3);
        $fidget3->setColor("rainbow");
        $fidget3->setShape("wing");

        $fidget4 = new Fidget();
        $fidget4->setId(4);
        $fidget4->setName("rainbow");
        $fidget4->setSide(3);
        $fidget4->setColor("rainbow");
        $fidget4->setShape("classic");

        $this->fidgets = [
            $fidget1,
            $fidget2,
            $fidget3,
            $fidget4,
        ];
    }

    public function findAll(): array
    {
        return $this->fidgets;
    }

    public function findOneById(int $id): Fidget
    {
        foreach ($this->fidgets as $fidget){
            if($fidget->getId() === $id){
                return $fidget;
            }
        }
    }

}