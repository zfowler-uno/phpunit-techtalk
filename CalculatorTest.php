<?php

// require
require 'Calculator.php';
class CalculatorTest extends PHPUnit_Framework_TestCase {
    // setup

    // add function test
    function testAdd() {
        $c = new Calculator();
        $result = $c->add(10,5);
        $this->assertEquals(15,$result);
    }

    // substract function test
    function testSubtract() {
        $c = new Calculator();
        $result = $c->subtract(20,8);
        $this->assertEquals(12,$result);
    }

    // divide function test
    function testDivide() {
        $c = new Calculator();
        $result = $c->divide(100,20);
        $this->assertEquals(5,$result);
    }

    // multiply function test
    function testMultiply() {
        $c = new Calculator();
        $result = $c->multiply(5,27);
        $this->assertEquals(135, $result);
    }
}
