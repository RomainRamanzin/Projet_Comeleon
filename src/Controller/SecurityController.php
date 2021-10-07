<?php

namespace App\Controller;

use App\Entity\Present;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/page/{id}", name="edit")
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
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils, 
    Present $present = null): Response
    {
        $present = new Present();

        if ($this->getUser()) {
            return $this->redirectToRoute('edit', ['id'=>$present->getId()]);
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
