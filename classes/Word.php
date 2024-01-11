<?php

class Word
{
    public string $englishTranslation;
    public string $dutchTranslation;

    public function __construct($englishTranslation, $dutchTranslation)
    {
        $this->englishTranslation = $englishTranslation;
        $this->dutchTranslation = $dutchTranslation;
    }

    public function verify(string $answer): bool
    {
        if (strtolower($this->dutchTranslation) === strtolower($this->answer)) {
            return true;
        } else {
            return false;
        }
        // TODO: use this function to verify if the provided answer by the user matches the correct one
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}