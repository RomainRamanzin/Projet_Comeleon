<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\Repository\Persistence;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, EntityManagerInterface $manager): Response
    {
        $contact = new Contact();

        $form = $this->createFormBuilder($contact)
                    ->add('nom')
                    ->add('prenom')
                    ->add('mail')
                    ->add('telephone')
                    ->add('description')
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $contact->setCreatedAt(new \DateTime());

           $manager->persist($contact);
           $manager->flush();

           return $this->redirectToRoute("contact");
        }

        return $this->render('contact/contact.html.twig',[
            'formcontact' => $form->createView()
        ]);
    }
}
