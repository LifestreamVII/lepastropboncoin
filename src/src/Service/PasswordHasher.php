<?php

namespace App\Service;
use Psr\Cache\CacheItemInterface;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class PasswordHasher
{
    /**
     * @var EncoderFactoryInterface
     */
    private $passHasher;

    public function __construct(PasswordHasherFactoryInterface $passHasher)
    {
        $this->passHasher = $passHasher;
    }

    public function encodePassword(string $password)
    {
        $encoder = $this->passHasher->getPasswordHasher(User::class);
        $hashedPassword = $encoder->hash($password, null);
        return $hashedPassword;
    }
}