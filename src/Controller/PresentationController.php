<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Present;
use App\Entity\Login;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class PresentationController extends AbstractController
{
    /**
     * @Route("/presentation", name="presentation")
     */
    public function index(): Response
    {
        return $this->render('presentation/index.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('presentation/home.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
    /**
     * @Route("/presentation/{id}", name="presentation")
     */
    public function presentation(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Present::class);
        $presentations = $repo->findAll();

        return $this->render('presentation/presentation.html.twig', [
            'controller_name' => 'PresentationController',
            'presentations' => $presentations
        ]);
    }
    /**
     * @Route("/page/{id}", name="page_edit")
     */
    public function form(Present $presentations,Request $request,
     EntityManagerInterface $manager)
    {
        $form = $this->createFormBuilder($presentations)
                    ->add('title')
                    ->add('content')
                    ->add('imageLien')
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $presentations->setCreateAt(new \DateTime());

            $manager->persist($presentations);

            $manager->flush();

            return $this->redirectToRoute('presentation' , 
            ['id' => $presentations->getId()]);
        }
        return $this->render('presentation/page.html.twig' , 
        ['form' => $form->createView()]);
    } 
}
