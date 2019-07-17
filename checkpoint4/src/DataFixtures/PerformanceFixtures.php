<?php

namespace App\DataFixtures;

use App\Entity\Performance;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker;

class PerformanceFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $performance = new Performance();
        $performance->setTitle('Laugh');
        $performance->setTexte('As an adult, come and discover our irresistible clowns, between practical jokes and pranks let yourself be carried away by their joy and fall back into childhood.');
        $performance->setImage('smile.jpg');
        $manager->persist($performance);
        $manager->flush();

        $performance = new Performance();
        $performance->setTitle('Dream');
        $performance->setTexte('Let yourself be carried away in a world where the real and the imaginary are one, in the company of our talented magicians, discover a wonderful world limited only by your imagination.');
        $performance->setImage('lapin.jpg');
        $manager->persist($performance);
        $manager->flush();

        $performance = new Performance();
        $performance->setTitle('Marvel');
        $performance->setTexte('Tame the untameable in the company of our tamers, between roar and razor-sharp claws, watch these fierce felines turn into sweet kittens.');
        $performance->setImage('cat.jpg');
        $manager->persist($performance);
        $manager->flush();
    }
}