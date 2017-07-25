<?php

namespace Tests;

use ClassToTest\ClassToTest;

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testShouldSayHello(): void
    {
        $classToTest = new ClassToTest();
        $this->assertEquals("Hello", $classToTest->sayHello());
    }
}