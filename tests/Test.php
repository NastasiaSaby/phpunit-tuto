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

        //Test if the mock method is called
        $wordManagerMock->expects($this->once())
            ->method('getNumber');

        $classToTest = new SpeakManager($wordManagerMock);
        $this->assertEquals("15", $classToTest->sayNumber());
    }

    /**
     * @test
     */
    public function shouldThrowAnException(): void
    {
        $classToTest = new SpeakManager(new WordManager());

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Je suis une exception");

        $classToTest->throwException();
    }
}