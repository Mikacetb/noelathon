<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class gameController extends AbstractController
{
    /**
     * @Route("/game", name="game_start", methods={"GET"})
     */
    public function game(): Response
    {
        return $this->render('game/game.html.twig');
    }
    /**
     * @Route("/game/toyshop", name="game_toyshop", methods={"GET"})
     */
    public function gameAtelier(): Response
    {
        return $this->render('game/gameAtelier.html.twig');
    }
    /**
     * @Route("/game/toyshop/interieur", name="entree", methods={"GET"})
     */
    public function gameLevel1(): Response
    {
        return $this->render('game/gameInterieurAtelier.html.twig');
    }
}
