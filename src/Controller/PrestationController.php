<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
     */
    public function create(Request $request, ObjectManager $manager){
        $prestation = new Prestation();

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
            'formPrestation' => $form->createView()
        ]);
    }
}
