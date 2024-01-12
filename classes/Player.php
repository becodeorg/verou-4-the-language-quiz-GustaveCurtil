<?php

class Player
{
    // TODO: add name and score
    private $name;
    private $score;

    public function __construct($name = 'player', $score = 0)
    {
        // TODO: add 👤 automatically to their name
        $this->name = $name;

        $_SESSION["score"] = 0;
        $this->score = $_SESSION["score"];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScore() 
    {
        $this->score = $_SESSION["score"];
        return $this->score;
    }

    public function increaseScore() 
    {
        $_SESSION["score"] += 1;
    }

    public function resetScore()
    {
        $_SESSION["score"] = 0;
    }
}