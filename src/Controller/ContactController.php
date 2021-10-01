<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use App\Repository\Persistence;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request): Response
    {
        
        $repo = $this->getDoctrine()->getRepository(Contact::class);

        $contact= $repo->findAll();

        if($request->request->Count() >0){
            $contact =new Contact();
            $contact->setNom($request->request->get('nom'))
                    ->setPrenom($request->request->get('prenom'))
                    ->setMail($request->request->get('mail'))
                    ->setTelephone($request->request->get('telephone'))
                    ->setDescription($request->request->get('description'));
                    -setCreated(new \DateTime());

        $manager->persist($contact);
        $manager->flush();
        }
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
