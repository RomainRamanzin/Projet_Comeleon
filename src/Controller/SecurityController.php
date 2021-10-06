<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security")
     */
    public function registration(Request $request, EntityManagerInterface $manager)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);//création de la form inscrire

        $form->handleRequest($request);//Analyse de la request

        if($form->isSubmitted() && $form->isValid()) //si le formulaire est soumis et champs valide
        {
            $manager->persist($user);//persister dans la base 
            $manager->flush();//le sauvegarder 
        }
        return $this->render('security/registration.html.twig', [ 'form' => $form->createView()
    ]);
    }
}
