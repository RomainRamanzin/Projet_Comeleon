<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Prestation;


class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Prestation::class); 

        $prestations = $repo->findAll();

        return $this->render('prestation/index.html.twig', [
            'prestations' => $prestations,
        ]);
    }


    /**
     * @Route("/prestation/new", name="prestation_create")
     * @Route("/prestation/{id}/edit", name="prestation_edit")
     */
    public function form(Prestation $prestation = null,Request $request, EntityManagerInterface $manager){
        
        if(!$prestation){
            $prestation = new Prestation();
        }

        $form = $this->createFormBuilder($prestation)
                     ->add('titre')
                     ->add('description')
                     ->add('image')
                     ->add('prix')
                     ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($prestation);
            $manager->flush();

            return $this->redirectToRoute('prestation');
        }

        return $this->render('prestation/create.html.twig',[
            'formPrestation' => $form->createView(),
            'editMode' =>$prestation->getId() !== null
        ]);
    }

    /**
     * @Route("/prestation/{id}/delete", name="prestation_delete")
     */
    public function delete(Prestation $prestation)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($prestation);
        $manager->flush();

        return $this->redirectToRoute("prestation");
    }
}
