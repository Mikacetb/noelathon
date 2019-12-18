<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/entree")
 */
class EtageController extends AbstractController
{
    /**
     * @Route("/etage", name="étage", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('etage.html.twig');
    }
}