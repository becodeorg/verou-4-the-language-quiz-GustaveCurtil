<?php

class Word
{
    private string $englishTranslation;
    private string $dutchTranslation;

    public function __construct($englishTranslation, $dutchTranslation)
    {
        $this->englishTranslation = $englishTranslation;
        $this->dutchTranslation = $dutchTranslation;
    }

    public function verify(string $answer): bool
    {
        $correctAnswer = strtolower($this->dutchTranslation);
        $providedAnswer = strtolower($answer);

        if ($correctAnswer === $providedAnswer) {
            $_SESSION["Result"] = 'CORRECT! The answer was indeed : <strong>' . $correctAnswer . "</strong>";
            return true;
        } else {
            $_SESSION["Result"] = "WRONG!!! The answer was : <strong>" . $correctAnswer . "</strong>";
            return false;
        }
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }

    public function getEnglishTranslation()
    {
        return $this->englishTranslation;
    }

    public function getDutchTranslation()
    {
        return $this->dutchTranslation;
    }
}