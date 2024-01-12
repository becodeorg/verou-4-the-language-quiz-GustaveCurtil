<?php

class LanguageGame
{
    private array $words;

    public function __construct()
    {
        // :: is used for static functions
        // They can be called without an instance of that class being created
        // and are used mostly for more *static* types of data (a fixed set of translations in this case)
        foreach (Data::words() as $englishTranslation => $dutchTranslation) {
            // TODO: create instances of the Word class to be added to the words array
            $this->words[] = new Word($englishTranslation, $dutchTranslation); //words[] ~= pushen JS
        }
    }

    public function randomWord()
    {
        $randomIndex = array_rand($this->words);
        $randomWord = $this->words[$randomIndex];
        return $randomWord;
    }

    public function run(): void
    {
        session_start();
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate

        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown
        
        if (empty($_POST)) {
            $_SESSION["Word"] = $this->randomWord();
            $_SESSION["Result"] = null;
            $_SESSION["Tries"] = 1;
            $_SESSION["Score"] = 0;

            // print_r($this->word);
        } else {
            if ($_SESSION["Word"]->verify($_POST['player-answer']))
            {
                $_SESSION["Corrects"] += 1;
                $_SESSION["Result"] = 'CORRECT! The answer was indeed : <strong>' . $_SESSION["Word"]->getDutchTranslation() . "</strong>";

            } else {
                $_SESSION["Result"] = "WRONG!!! The answer was : <strong>" . $_SESSION["Word"]->getDutchTranslation() . "</strong>";
            }
            $_SESSION['Word'] = $this->randomWord();
            $_SESSION["Tries"] += 1;
        }
    }

}