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

    /**
     * @Route("game/salon", name="game_salon", methods={"GET"})
     */
    public function salon(): Response
    {
        return $this->render('salon.html.twig');
    }

    /**
     * @Route("game/cheminee", name="game_cheminee", methods={"GET"})
     */
    public function cheminee(): Response
    {
        return $this->render('cheminee.html.twig');
    }

        /**
     * @Route("game/wc", name="game_wc", methods={"GET"})
     */
    public function wc(): Response
    {
        return $this->render('wc.html.twig');
    }

        /**
     * @Route("game/cuisine", name="game_cuisine", methods={"GET"})
     */
    public function cuisine(): Response
    {
        return $this->render('cuisine.html.twig');
    }
}