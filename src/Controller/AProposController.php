<?php

namespace App\Controller;

use App\Entity\Apropos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/a_propos", name="a_propos")
     */
    public function index(): Response
    {
        $apropos = $this->entityManager->getRepository(Apropos::class)->findAll();
        return $this->render('a_propos/index.html.twig', [
            'controller_name' => 'AProposController',
            'apropos' => $apropos
        ]);
    }
}
