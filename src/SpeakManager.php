<?php

namespace ClassToTest;

class SpeakManager
{
    private $wordManager;

    public function __construct(WordManager $wordManager)
    {
        $this->wordManager = $wordManager;
    }

    public function sayHello(): string
    {
        return $this->wordManager->getHello();
    }
}