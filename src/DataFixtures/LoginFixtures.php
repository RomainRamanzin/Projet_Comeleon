<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Login;

class LoginFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 0; $i < 5;$i++)
        {
            $Connexion = new Login();
            $Connexion->setIdentifiant("sinan")
                        ->setPassword("sinan123");
            $manager->persist($Connexion);
        }
        $manager->flush();
    }
}
