<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Avis;
class AvisFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       for($i = 1; $i<=10; $i++){
           $avis = new Avis();
           $avis->SetTitre("Titre de l'avis n°$i")
                ->SetAuteur("Prénom Nom n°$i")
                ->SetContent("<p>Contenu de l'avis n°$i</p>")
                ->SetCreatedAt(new \DateTime());
            $manager->persist($avis);
       }

        $manager->flush();
    }
}
