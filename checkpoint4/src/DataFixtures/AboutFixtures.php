<?php

namespace App\DataFixtures;

use App\Entity\About;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker;

class AboutFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $about = new About();
        $about->setTitle('About Us');
        $about->setText('Do you want see incredible things ?
Do you want fun ?
Do you want to wake up with smile every morning ?
Our circus present amazing animals, a different acrobat you didn\'t see that before, but to watch this you can to come to Wild Circus. ');
        $about->setImage('propos.png');
        $manager->persist($about);
        $manager->flush();
    }
}