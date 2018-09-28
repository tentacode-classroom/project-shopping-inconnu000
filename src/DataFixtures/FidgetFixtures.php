<?php

namespace App\DataFixtures;

use App\Entity\Fidget;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class FidgetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $fidget1 = new Fidget();
        $fidget1->setName("classic");
        $fidget1->setSide(3);
        $fidget1->setColor("red");
        $fidget1->setShape("classic");
        $fidget1->setPrice(5.95);
        $fidget1->setPic("/img/classic.png");
        $fidget1->setDescription("A classic");

        $manager->persist($fidget1);

        $fidget2 = new Fidget();
        $fidget2->setName("atom");
        $fidget2->setSide(6);
        $fidget2->setColor("rainbow");
        $fidget2->setShape("atom");
        $fidget2->setPrice(4.25);
        $fidget2->setPic("/img/atom.png");
        $fidget2->setDescription("A nice form and pattern");

        $manager->persist($fidget2);

        $fidget3 = new Fidget();
        $fidget3->setName("dragon");
        $fidget3->setSide(3);
        $fidget3->setColor("rainbow");
        $fidget3->setShape("wing");
        $fidget3->setPrice(6.25);
        $fidget3->setPic("/img/dragon.png");
        $fidget3->setDescription("A cool one with beautiful dragon wings");

        $manager->persist($fidget3);

        $fidget4 = new Fidget();
        $fidget4->setName("rainbow");
        $fidget4->setSide(3);
        $fidget4->setColor("rainbow");
        $fidget4->setShape("classic");
        $fidget4->setPrice(6.00);
        $fidget4->setPic("/img/rainbow.png");
        $fidget4->setDescription("A display of color which mix themselves in action");

        $manager->persist($fidget4);

        $manager->flush();
    }
}
