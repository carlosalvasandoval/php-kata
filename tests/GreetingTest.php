<?php

use PHPUnit\Framework\TestCase;
use main\Greeting;
class GreetingTest extends TestCase
{
    public function testHello()
    {
        $greeting = new Greeting();
        $expectedVal = 'hello';
        $this->assertSame(
            $greeting->hello(),
            $expectedVal
        );
    }

    public function testBye()
    {
        $greeting = new Greeting();
        $expectedVal = 'fail';
        $this->assertSame(
            $greeting->bye(),
            $expectedVal
        );
    }
}
