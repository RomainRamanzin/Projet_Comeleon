<?php

namespace App\Controller;

use App\Entity\Present;
use App\Entity\User;
use App\Repository\PresentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PresentationController extends AbstractController
{
    /**
     * @Route("/presentation", name="presentation")
     */
    public function index(): Response
    {
        $prest = $this->getDoctrine()->getRepository(Present::class)->findAll();


        return $this->render('presentation/index.html.twig', [
            'presentations'=> $prest
        ]);
    }

    /**
     * @Route("/presentation/new", name="presentation_new")
     * @Route("/presentation/{id}/edit", name="presentation_edit")
     */
    public function formPresentation(Present $presentation = null, Request $request, EntityManagerInterface $manager)
    {
        if(!$presentation){
            $presentation = new Present();
        }

        $form = $this->createFormBuilder($presentation)
                     ->add('title')
                     ->add('imageLien')
                     ->add('content')
                     ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $presentation->setCreateAt(new \DateTime());

            $manager->persist($presentation);
            $manager->flush();

            return $this->redirectToRoute('presentation');
        }

        return $this->render('presentation/page.html.twig',[
            'formPresentation' => $form->createView(),
            'editMode' =>$presentation->getId() !== null
        ]);
    }

    /**
     * @Route("/presentation/{id}/delete", name="presentation_delete")
     */
    public function deletePresentation(Present $presentation)
    {
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($presentation);
        $manager->flush();

        return $this->redirectToRoute("presentation");
    }
}
