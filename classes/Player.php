<?php

class Player
{
    // TODO: add name and score
    private $name;
    private $score;

    public function __construct($score, $name = 'player')
    {
        // TODO: add 👤 automatically to their name
        $this->name = $name;
        $this->score = $score;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScore() 
    {
        return $this->score;
    }

    public function increaseScore() 
    {
        $this->score += 1;
    }

    public function resetScore()
    {
        $this->score = 0;
    }
}