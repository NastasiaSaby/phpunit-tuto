<?php

namespace Tests;

use ClassToTest\SpeakManager;

use ClassToTest\WordManager;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testShouldSayNumber(): void
    {
        $wordManagerMock = $this->createMock(WordManager::class);

        // Configure the mock.
        $wordManagerMock->method('getNumber')
            ->will($this->returnCallback(function () {return 15;}));

        $classToTest = new SpeakManager($wordManagerMock);
        $this->assertEquals("15", $classToTest->sayNumber());
    }
}