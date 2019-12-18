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
     * @Route("/etage", name="etage", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('etage.html.twig');
    }

    /**
     * @Route("/sapin", name="sapin", methods={"GET"})
     */
    public function sapin(): Response
    {
        return $this->render('sapin.html.twig');
    }

    /**
     * @Route("/crochet", name="crochet", methods={"GET"})
     */
    public function crochet(): Response
    {
        return $this->render('crochet.html.twig');
    }

    /**
     * @Route("/loupe", name="loupe", methods={"GET"})
     */
    public function loupe(): Response
    {
        return $this->render('loupe.html.twig');
    }
}