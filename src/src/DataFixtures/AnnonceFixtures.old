<?php

namespace App\DataFixtures;

use App\Entity\Annonce;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use DateTime;

class AnnonceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        for ($count = 0; $count < 15; $count++) {
            $annonce = new Annonce();
            $annonce->setTitre("Titre " . $count);
            $annonce->setDescription("Description " . $count);
            $annonce->setPrix($count);
            $annonce->setDate(new DateTime());
            $annonce->setAuteur($this->getReference(UserFixtures::USER_REFERENCE));
            $manager->persist($annonce);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
        );
    }
}

?>