<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Prestation;

class PrestationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for($i =0; $i < 10; $i++){
            $prestation = new Prestation();
            $prestation->setTitre("Titre de la prestation $i")
                       ->setDescription("Description de la prestation $i")
                       ->setImage("http://placehold.it/350x150")
                       ->setPrix(27.8);
            
            $manager->persist($prestation);
        }
        $manager->flush();
    }
}
