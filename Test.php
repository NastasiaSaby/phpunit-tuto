<?php

use PHPUnit\Framework\TestCase;

include('ClassToTest.php');

class Test extends TestCase
{
    public function testShouldSayHello(): void
    {
        $classToTest = new ClassToTest();
        $this->assertEquals("Hello", $classToTest->sayHello());
    }
}