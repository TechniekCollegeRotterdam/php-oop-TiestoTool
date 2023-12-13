<?php

require_once 'Game.php';

$game1 = new Game('fornite', 'blablabla', '0', ['build', "help me"]);

echo $game1->getName();

var_dump($game1);