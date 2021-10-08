<?php

namespace App\Controller;

use App\Entity\Present;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use App\Repository\PresentRepository;

class SecurityController extends AbstractController
{
    /**
     * @Route("/page", name="edit")
     */
    public function form(Present $presentations = null,Request $request,
     EntityManagerInterface $manager)
    {
        $form = $this->createFormBuilder($presentations)
                    ->add('title')
                    ->add('content', TextareaType::class)
                    ->add('imageLien')
                    ->getForm();

        $data = $this->getDoctrine()->getRepository(Present::class)->findAll();
        $form['title']->setData($data[0]->getTitle());
        $form['content']->setData($data[0]->getContent());
        $form['imageLien']->setData($data[0]->getImageLien());

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $presentations->setCreateAt(new \DateTime());

            $manager->persist($presentations);

            $manager->flush();

             return $this->redirectToRoute('presentation' , 
             ['id' => $presentations->getId()]);
        }
        return $this->render('presentation/page.html.twig' , [
            'form' => $form->createView(),
        ]);
    } 
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('');
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
