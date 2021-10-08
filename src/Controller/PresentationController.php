<?php

namespace App\Controller;

use App\Entity\User;

use App\Entity\Present;
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
            'controller_name' => 'PresentationController',
            'presentations'=> $prest
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
}
