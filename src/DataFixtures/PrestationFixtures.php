<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Prestation;

class PrestationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {          
        $prestation = new Prestation();
        $prestation->setTitre("Installation et Entretien de chaudière")
                   ->setDescription("Le service Allo Plombier c’est avant tout un gage de qualité, en effet, des artisans professionnels de plus de 15 ans d’expériences qui vous offrent des services de travaux domestiques à tous moments en région parisienne pour l’installation, la maintenance et l’entretien de votre chaudière mais aussi pour la réparation ou la remise en pression de celle-ci.
                    </br></br>
                   Quel que soit votre chaudière à gaz, à électricité ou même à granulé il est possible qu’une panne ou une défiance se produisent au moment où vous ne vous y attendez pas, c’est dans ce genre de situation que l’intervention d’un professionnel vous est nécessaire.")
                   ->setImage("https://www.a2depannages.fr/docs/chauffage/chauffagiste-taverny-95-val-d-oise.jpg")
                   ->setPrix(59);
            
        $manager->persist($prestation);

        $prestation = new Prestation();
        $prestation->setTitre("Installation de ballon d’eau chaude")
                   ->setDescription("Le ballon d’eau chaude ou cumulus est devenu l’élément indispensable du confort moderne, mais beaucoup de gens se posent des question sur son utilité et de son entretien. Facile à poser et à entretenir, votre ballon d’eau chaude vous servira à satisfaire vos besoins en eau chaude pour votre cuisine, votre salle de bain ou vos sanitaires.
                   </br></br>
                   Les cumulus varient selon leurs tailles (de 10 à 500 litres) suivant la superficie de votre domicile, ils peuvent être horizontaux ou verticaux, fixés aux murs au sol ou au plafond. Les cumulus à résistance stéatite sont pratiques, en effet, en cas d’intervention, pas besoin de vidanger pour accéder à la résistance. De plus le calcaire ne se dépose que de façon très limité et ne détériore par la résistance à l’inverse d’une résistance thermoplongeur qui elle est difficile à entretenir et à maintenir en bon état.")
                   ->setImage("https://www.yesss-fr.com/assets/pics/produits/Plomberie.jpg")
                   ->setPrix(99);
            
        $manager->persist($prestation);

        $prestation = new Prestation();
        $prestation->setTitre("Dépannage en urgence")
                   ->setDescription("Imaginez si une fuite arrive cette nuit, ou si vous avez une panne le week-end. Deux situations très embêtantes si personne ne peut venir vous aider. Heureusement, Allo Plombier est ouvert 24h/24 et 7j/7, vous pouvez donc leur demander de vous dépanner en urgence à n’importe quel moment.
                   </br></br>
                   Allo Plombier est là pour répondre à vos besoins et plus encore! Ils sont une équipe très professionelle et intervenant rapidement dans votre domicile, prêt à vous conseiller ou vous laissez la possibilité de faire un devis gratuitement.")
                   ->setImage("https://www.resoconfort.fr/content/uploads/sites/7/2019/06/shutterstock_655155613-e1560518056689-1024x519.jpg")
                   ->setPrix(99);
            
        $manager->persist($prestation);

        $prestation = new Prestation();
        $prestation->setTitre("Assainissement et eaux usées")
                   ->setDescription("L’assainissement des eaux comprend les eaux de pluies, de lavage, eaux usées provenant des toilettes, etc.
                   Allo Plombier vous propose d’assainir les eaux de votre domicile car le traitement des eaux à de nombreux avantages.
                   </br></br>
                   Tout d’abord, vous limitez les risques de maladies et respectez l’environnement. L’objectif principal de l’assainissement est d’assurer l’évacuation et le traitement des eaux usées justement pour limiter ces risques.")
                   ->setImage("https://static.vecteezy.com/ti/vecteur-libre/p1/2163534-pollution-de-la-riviere-avec-les-eaux-usees-de-l-usine-jeter-les-dechets-dans-l-eau-contamination-de-l-eau-potable-vectoriel.jpg")
                   ->setPrix(149);

                   $manager->persist($prestation);

                   $prestation = new Prestation();
                   $prestation->setTitre("Réparation de canalisations")
                              ->setDescription("Qui dit canalisation défectueuse dit souvent fuite.
                              Le premier réflexe à avoir est d’identifier l’endroit où se trouve le problème pour savoir expliquer votre problème. La méthode traditionnelle pour déboucher vos canalisations reste la ventouse qui permettra de pomper pour forcer le passage et retirer ce qui peut gêner l’écoulement. Malheureusement, cette technique ne fonctionne pas à chaque fois. Avec les progrès actuels, ils existent d’autres solutions comme la projection de résine ou bien le chemisage continu polymérisé pour tout type de canalisations intérieures. Cette dernière technique qui est le “chemisage” consiste à réparer ou rénover la paroi qui est fissuré. La résine durcissant qui sera inséré est résistante à tous types de produits dans la canalisation.")
                              ->setImage("https://thermozassainissement.fr/wp-content/uploads/2021/03/Thermoz-assainissement-inspection-camera-canalisation.jpg")
                              ->setPrix(79);
           
                              $manager->persist($prestation);


                              $prestation = new Prestation();
                              $prestation->setTitre("Les dégâts des eaux")
                                         ->setDescription("Les fuites d’eau ne sont pas à prendre à la légère pour éviter divers dégâts dans votre logement. Plusieurs indices significatifs vous permettent de détecter ce type de problème : l’écoulement d’eau de vos robinets ou de vos tuyaux, des marques aux murs ou aux plafonds, des odeurs des moisissures, la peinture qui se décolle ou encore l’apparition de champignons. Si l’un de ces signaux apparaît, il y a quelques gestes à savoir pour limiter la propagation de la fuite :

                                            Il faut couper l’électricité de la pièce pour une petite fuite. Si cette dernière s’avère plus importante, couper l’intégralité dans votre logement. Ce geste permettra d’éviter des risques d’électrocution et des courts-circuits.
                                            Il faut réduire la dispersion de l’eau à l’aide d’un torchon ou d’une serpillière afin de limiter les dégâts.
                                            Il faut immédiatement arrêter le circuit de l’eau en attendant l’intervention d’un expert. Le robinet d’arrêt d’eau se trouve souvent dans ces différentes pièces : salle de bain, cuisine, rez de chaussée, garage. Regardez sous votre évier.
                                            Essayez de repérer la zone défectueuse pour expliquer votre problème au maximum afin que l’expert puisse orienter sa recherche. Il peut s’agir d’un joint défectueux ou usé, d’un tuyau abîmé, etc.")
                                         ->setImage("https://static.vecteezy.com/ti/vecteur-libre/p1/3146817-le-inondation-a-inonde-la-ville-gratuit-vectoriel.jpg")
                                         ->setPrix(200);
                      
                                         $manager->persist($prestation);

        $manager->flush();
    }
}
