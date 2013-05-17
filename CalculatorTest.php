<?php

// require
require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {
    // setup

    // add function test
    function testAdd() {
        $c = new Calculator();
        $result = $c->add(10, 5);
        $this->assertEquals(15, $result);
    }

    // substract function test

    // divide function test

    // multiply function test
}
