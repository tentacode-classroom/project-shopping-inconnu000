<?php

namespace App\DataFixtures;

use App\Entity\Fidget;
use App\Entity\Shape;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FidgetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $shape1 = new Shape();
        $shape1->setName("classic");

        $manager->persist($shape1);

        $shape2 = new Shape();
        $shape2->setName("atom");

        $manager->persist($shape2);

        $shape3 = new Shape();
        $shape3->setName("wing");

        $manager->persist($shape3);

        $manager->flush();
        // $product = new Product();
        // $manager->persist($product);
        $fidget1 = new Fidget();
        $fidget1->setName("classic");
        $fidget1->setSide(3);
        $fidget1->setColor("red");
        $fidget1->setShape($shape1);
        $fidget1->setPrice(5.95);
        $fidget1->setPic("/img/classic.png");
        $fidget1->setDescription("A classic");
        $fidget1->setViewCounter(0);

        $manager->persist($fidget1);

        $fidget2 = new Fidget();
        $fidget2->setName("atom");
        $fidget2->setSide(6);
        $fidget2->setColor("rainbow");
        $fidget2->setShape($shape2);
        $fidget2->setPrice(4.25);
        $fidget2->setPic("/img/atom.png");
        $fidget2->setDescription("A nice form and pattern");
        $fidget2->setViewCounter(0);

        $manager->persist($fidget2);

        $fidget3 = new Fidget();
        $fidget3->setName("dragon");
        $fidget3->setSide(3);
        $fidget3->setColor("rainbow");
        $fidget3->setShape($shape3);
        $fidget3->setPrice(6.25);
        $fidget3->setPic("/img/dragon.png");
        $fidget3->setDescription("A cool one with beautiful dragon wings");
        $fidget3->setViewCounter(0);

        $manager->persist($fidget3);

        $fidget4 = new Fidget();
        $fidget4->setName("rainbow");
        $fidget4->setSide(3);
        $fidget4->setColor("rainbow");
        $fidget4->setShape($shape1);
        $fidget4->setPrice(6.00);
        $fidget4->setPic("/img/rainbow.png");
        $fidget4->setDescription("A display of color which mix themselves in action");
        $fidget4->setViewCounter(0);

        $manager->persist($fidget4);

        $manager->flush();
    }
}
