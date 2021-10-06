<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Present;

class PresentationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for($i = 0; $i < 5;$i++)
        {
            $presentation = new Present();
            $presentation->setTitle("Titre")
                        ->setContent("Un wiki est une application web qui permet la création, la modification et l'illustration collaboratives de pages à 
            l'intérieur d'un site web. Il utilise un langage de balisage et son contenu est modifiable au moyen d’un navigateur web. 
            C'est un logiciel de gestion de contenu, dont la structure implicite est minimale, tandis que la structure explicite se 
            met en place progressivement en fonction des besoins des usagers.")
                        ->setCreateAt(new \DateTime())
                        ->setImageLien("https://static5.depositphotos.com/1037987/479/i/950/depositphotos_4796386-stock-photo-plumbing-equipment-on-house-plans.jpg");
            $manager->persist($presentation);
        }
        $manager->flush();
    }
}
