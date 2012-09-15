<?php

namespace Camel\Tests;

use Camel\CaseTransformer;
use Camel\Format;

class CaseTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransform()
    {
        $from = new Format\CamelCase();
        $to   = new Format\SnakeCase();

        $transformer = new CaseTransformer($from, $to);
        $this->assertEquals('hello_world', $transformer->transform('helloWorld'));

        $transformer = new CaseTransformer($to, $from);
        $this->assertEquals('helloWorld', $transformer->transform('hello_world'));
    }
}