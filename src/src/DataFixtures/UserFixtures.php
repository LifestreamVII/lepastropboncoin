<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public const USER_REFERENCE = 'user-basic';
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername("je4nc4stX");
        $user->setFirstName("Jean");
        $user->setLastName("Castex");
        $user->setPassword("password");
        
        $manager->persist($user);
        $manager->flush();

        $this->addReference(self::USER_REFERENCE, $user);

    }
    public static function getGroups(): array
    {
        return ['group1', 'group2'];
    }
}
?>