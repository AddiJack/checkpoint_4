<?php

namespace App\DataFixtures;

use App\Entity\Prices;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker;

class PriceFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $prices = new Prices();
        $prices ->setPerson('Adult');
        $prices ->setMoment('Week exept Wednesday');
        $prices ->setPrice('15€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('Child under 12');
        $prices ->setMoment('Week exept Wednesday');
        $prices ->setPrice('7.5€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('Group (more 10)');
        $prices ->setMoment('Week exept Wednesday');
        $prices ->setPrice('5€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('School');
        $prices ->setMoment('Week exept Wednesday');
        $prices ->setPrice('2.5€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('Adult');
        $prices ->setMoment('Weekend and Wednesday');
        $prices ->setPrice('20€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('Child under 12');
        $prices ->setMoment('Weekend and Wednesday');
        $prices ->setPrice('10€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('Group (more 10)');
        $prices ->setMoment('Weekend and Wednesday');
        $prices ->setPrice('8€');
        $manager->persist($prices);
        $manager->flush();

        $prices = new Prices();
        $prices ->setPerson('School');
        $prices ->setMoment('Weekend and Wednesday');
        $prices ->setPrice('4€');
        $manager->persist($prices);
        $manager->flush();
    }
}