<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Present;

class PresentationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $presentation = new Present();
        $presentation->setTitle("UNE ÉQUIPE DE PLOMBIERS-CHAUFFAGISTES QUALIFIÉS PRÈS DE CHEZ VOUS")
                    ->setContent("Vous recherchez un plombier-chauffagiste en Ile-de-France ? Faites appel à Allo Plombier ! La société intervient pour prendre en charge toutes vos installations sanitaires et de chauffage et peut également intervenir pour tous vos dépannages de plomberie et de chaudière en Ile-de-France. Votre équipe de plombiers-chauffagistes a également été formée aux énergies renouvelables afin de répondre à toutes vos exigences.
                    </br></br>
                    N’hésitez pas à contacter votre spécialiste de l’installation sanitaire pour plus de renseignements ou pour recevoir votre devis gratuit !")
                    ->setCreateAt(new \DateTime())
                    ->setImageLien("https://www.schneider-cie.fr/wp-content/uploads/2021/06/plombier-chauffagiste-schneider-et-cie-1024x576.jpg");
        
        $manager->persist($presentation);

            $presentation = new Present();
            $presentation->setTitle("Ouvert 365 jours sur 365 en plomberie et chauffage")
                        ->setContent("Un problème ou une intervention quelconque un jour férié ? Ne vous inquiétez pas, Allo Plombier est ouvert 24h/24 7j/7 et même les jours fériés. Voici les jours fériés où nous sommes ouverts : le 1er Janvier, 1er Mai, 8 Mai, 20 Mai, 14 Juillet, 1 et 11 Novembre et le 25 et 31 Décembre. Votre artisan intervient depuis de nombreuses années sur des problèmes de chauffage et de plomberie. Allo Plombier, qui avant tout est spécialisé dans les travaux de rénovation s'est étendu jusqu'à devenir incontournable en dépannage d'urgence tout en solidifiant son expérience dans les travaux de second œuvre. Nous intervenons principalement dans le domaine de la cuisine, des sanitaires, de la salle de bain avec des services comme l'installation de lave-main ou encore la pose de cuvette. Allo Plombier Ile-de-France vous accompagne tout au long de l'intervention qu'elle soit urgente ou sur plusieurs jours. Notre expérience dans votre région nous permet d'être aujourd'hui agréée par les assurances.")
                        ->setCreateAt(new \DateTime())
                        ->setImageLien("https://media.istockphoto.com/vectors/-vector-id1227491350?k=20&m=1227491350&s=612x612&w=0&h=KGs6RK_ElbXLAkILhh_tOzoVK45U5Lem2LYgUo9uUz8=");
            
            $manager->persist($presentation);

        $manager->flush();
    }
}
