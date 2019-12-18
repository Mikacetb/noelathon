<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class gameController extends AbstractController
{
    /**
     * @Route("/game", name="game", methods={"GET"})
     */
    public function game(): Response
    {
        return $this->render('game/game.html.twig');
    }
    /**
     * @Route("/game/lvl1", name="game_level1", methods={"GET"})
     */
    public function gameLevel1(): Response
    {
        return $this->render('game/gameLevel1.html.twig');
    }
}
