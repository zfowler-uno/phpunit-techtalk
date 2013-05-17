<?php

// require
require 'Calculator.php';
class CalculatorTest extends PHPUnit_Framework_TestCase {

    private $c;

    // setup
    public function setUp() {
        $this->c = new Calculator();
    }

    // tear down
    public function tearDown() {
        unset($this->c);
    }

    // add function test
    function testAdd() {
        $firstNumberToAdd = 10;
        $secondNumberToAdd = 5;
        $expectedResult = 15;
        $result = $this->c->add($firstNumberToAdd,$secondNumberToAdd);
        $this->assertEquals($expectedResult,$result);
    }

    // substract function test
    function testSubtract() {
        $firstNumberToSubtractFrom = 20;
        $secondNumberToSubtract = 8;
        $expectedResult = 12;
        $result = $this->c->subtract($firstNumberToSubtractFrom, $secondNumberToSubtract);
        $this->assertEquals($expectedResult,$result);
    }

    // divide function test
    function testDivide() {
        $firstNumberToDivideInto = 100;
        $secondNumberToDivideWith = 20;
        $expectedResult = 5;
        $result = $this->c->divide($firstNumberToDivideInto,$secondNumberToDivideWith);
        $this->assertEquals($expectedResult,$result);
    }

    // multiply function test
    function testMultiply() {
        $firstNumberToMultiply = 5;
        $secondNumberToMultiply = 27;
        $expectedResult = 135;
        $result = $this->c->multiply($firstNumberToMultiply,$secondNumberToMultiply);
        $this->assertEquals($expectedResult, $result);
    }
}
