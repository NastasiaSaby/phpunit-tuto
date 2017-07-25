<?php

namespace ClassToTest;

class WordManager
{
    public function getNumber(): string
    {
        return rand(1, 100);
    }
}