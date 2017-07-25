<?php

namespace Tests;

use ClassToTest\SpeakManager;

use ClassToTest\WordManager;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testShouldSayHello(): void
    {
        $wordManagerMock = $this->createMock(WordManager::class);

        // Configure the mock.
        $wordManagerMock->method('getNumber')
            ->willReturn('15');

        $classToTest = new SpeakManager($wordManagerMock);
        $this->assertEquals("15", $classToTest->sayNumber());
    }
}