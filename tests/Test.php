<?php

namespace Tests;

use ClassToTest\SpeakManager;

use ClassToTest\WordManager;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testShouldSayHello(): void
    {
        $classToTest = new SpeakManager(new WordManagerSon());
        $this->assertEquals("15", $classToTest->sayNumber());
    }
}

class WordManagerSon extends WordManager
{
    public function getNumber(): string
    {
        return "15";
    }
}