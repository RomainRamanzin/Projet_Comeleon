<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security")
     */
    public function registration(Request $request, EntityManagerInterface $manager,
    UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);//création de la form inscrire

        $form->handleRequest($request);//Analyse de la request

        if($form->isSubmitted() && $form->isValid()) //si le formulaire est soumis et champs valide
        {
            $hash = $encoder->encodePassword($user, $user->getPassword());//pour encoder le mot de passe 2

            $user->setPassword($hash);//remplacer le mot de passe par celui crypté

            $manager->persist($user);//persister dans la base 
            $manager->flush();//le sauvegarder 

            return $this->redirectToRoute('security/connexion.html.twig');
        }
        return $this->render('security/registration.html.twig', 
        [ 'form' => $form->createView()]);
    }
    /**
     * @Route("/connexion", name="security_login")
     */
    public function login()//fonctionne pas
    {
        return $this->render('security/login.html.twig');
    }
}
