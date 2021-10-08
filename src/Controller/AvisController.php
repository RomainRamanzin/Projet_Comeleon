<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Avis;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Repository\AvisRepository;

class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="avis")
     */
    public function index(AvisRepository $repo): Response
    {
        $avis= $repo->findAll();

        return $this->render('avis/index.html.twig', [
            'controller_name' => 'AvisController',
            'avis' => $avis
        ]);
    }

    /**
     * @Route("/avis/nouveau", name="avis_nouveau")
     */
    public function createAvis(Request $request, EntityManagerInterface $manager){
        $avis = new Avis();

        $form = $this->createFormBuilder($avis)
                    ->add('titre')
                    ->add('auteur', Texttype::class)
                    ->add('content')
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $avis->setCreatedAt(new \DateTime());

           $manager->persist($avis);
           $manager->flush();

           return $this->render('avis_show', ['id' => $avis->getId()]);
        }

        return $this->render('avis/createAvis.html.twig',[
            'formAvis' => $form->createView()
        ]);
    }


    /**
     * @Route("/avis/{id}", name="avis_show")
     */
    public function show(Avis $avi){
        
        return $this->render('avis/show.html.twig', [
            'avi' => $avi
        ]);
    }

    
}
