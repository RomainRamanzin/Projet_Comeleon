<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use\App\Entity\Avis;
use\App\Repository\AvisRepository;
class AvisController extends AbstractController
{
    /**
     * @Route("/avis", name="avis")
     */
    public function index(AvisRepository $repo): Response
    {
        $avis= $repo->findAll();

        return $this->render('avis/index.html.twig', [
            'controller_name' => 'AvisController',
            'avis' => $avis
        ]);
    }

    /**
     * @Route("/avis/{id}", name="avis_show")
     */
    public function show(Avis $avi){
        
        

        return $this->render('avis/show.html.twig', [
            'avi' => $avi
        ]);
    }
}
