<?php

require_once 'Game.php';
require_once 'GameList.php';

$gamer1 = new GameList();

$game1 = new Game('fornite', 'blablabla', '0', ['build', "help me"]);
$game2 = new Game('minecraft', 'je moet bouwen', '30', ['build', 'bouw maar lekker veel'] );

$gamer1->addGame($game1);
$gamer1->addGame($game2);

echo $game1->getName();

var_dump($gamer1);