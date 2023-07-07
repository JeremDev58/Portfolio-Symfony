<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Projet;
use App\Repository\ProjetRepository;

class PortfolioJeremController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {


        return $this->render('portfolio_jerem/index.html.twig', [
            'controller_name' => 'PortfolioJeremController',
        ]);
    }
    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation()
    {


        return $this->render('portfolio_jerem/presentation.html.twig', [
            'controller_name' => 'PortfolioJeremController',
        ]);
    }
    /**
     * @Route("/competence", name="competence")
     */
    public function competence()
    {


        return $this->render('portfolio_jerem/competence.html.twig', [
            'controller_name' => 'PortfolioJeremController',
        ]);
    }
    /**
     * @Route("/projet", name="projet")
     */
     public function projet(ProjetRepository $repo)
    {

        $projets = $repo->findAll();
        return $this->render('portfolio_jerem/projet.html.twig', [
            'controller_name' => 'PortfolioJeremController',
            'projets' => $projets
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {


        return $this->render('portfolio_jerem/contact.html.twig', [
            'controller_name' => 'PortfolioJeremController',
        ]);
    }

}
