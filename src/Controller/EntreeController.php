<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/entree")
 */
class EntreeController extends AbstractController
{
    /**
     * @Route("/", name="entree", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('entree.html.twig');
    }
}