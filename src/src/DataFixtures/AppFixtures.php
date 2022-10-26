<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        UserFactory::createOne([
            'username' => 'lolo23',
            'firstname' => 'Loïs',
            'lastname' => 'Lespes',
            'password' => 'password',
            'roles' => ['ROLE_ADMIN']
        ]);
        UserFactory::createOne([
            'username' => 'username',
            'firstname' => 'uno',
            'lastname' => 'dos',
            'password' => 'password'
        ]);
        $manager->flush();
    }
}
