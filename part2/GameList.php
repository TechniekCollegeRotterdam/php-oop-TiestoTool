<?php

class GameList
{
    public array $games = [];

    public function addGame(Game $game)
    {
        $this->games[]= $game;
    }
}