<?php

namespace Tests;

use ClassToTest\SpeakManager;

use ClassToTest\WordManager;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testShouldSayHello(): void
    {
        $classToTest = new SpeakManager(new WordManager());
        $this->assertEquals("Hello", $classToTest->sayNumber());
    }
}