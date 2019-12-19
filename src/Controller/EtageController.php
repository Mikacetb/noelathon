<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtageController extends AbstractController
{
    /**
     * @Route("game/etage", name="game_etage", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('etage.html.twig');
    }

    /**
     * @Route("game/sapin", name="game_sapin", methods={"GET"})
     */
    public function sapin(): Response
    {
        return $this->render('sapin.html.twig');
    }

    /**
     * @Route("game/crochet", name="game_crochet", methods={"GET"})
     */
    public function crochet(): Response
    {
        return $this->render('crochet.html.twig');
    }

    /**
     * @Route("game/loupe", name="game_loupe", methods={"GET"})
     */
    public function loupe(): Response
    {
        return $this->render('loupe.html.twig');
    }
}