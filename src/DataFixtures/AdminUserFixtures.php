<?php

namespace App\DataFixtures;

use App\Entity\AdminUser;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminUserFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {

        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $users =
            [
                [
                    'username' => 'hugo',
                    'password' => 'Hugo@123',
                ],
                [
                    'username' => 'valentin',
                    'password' => 'Valentin@123',
                ],
                [
                    'username' => 'marc',
                    'password' => 'Marc@123',
                ],
                [
                    'username' => 'corentin',
                    'password' => 'Corentin@123',
                ],
                [
                    'username' => 'florent',
                    'password' => 'Florent@123',
                ],
            ];

        $userObjects = [];
        for ($u = 0; $u <=  count($users) - 1; $u++) {
            $user = new AdminUser();
            $user->setUsername($users[$u]['username']);
            $hashedPassword = $this->passwordHasher->hashPassword($user, $users[$u]['password']);
            $user->setPassword($hashedPassword);
            $userObjects[] = $user;
            $manager->persist($user);
        }
        $manager->flush();
    }
}
