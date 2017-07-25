<?php

namespace ClassToTest;

class SpeakManager
{
    private $wordManager;

    public function __construct(WordManager $wordManager)
    {
        $this->wordManager = $wordManager;
    }

    public function sayNumber(): string
    {
        return $this->wordManager->getNumber();
    }
}