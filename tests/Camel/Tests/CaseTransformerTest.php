<?php

/*
 * This file is part of Camel.
 *
 * (c) Matthieu Moquet <matthieu@moquet.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Camel\Tests;

use Camel\CaseTransformer;
use Camel\Format;

class CaseTransformerTest extends \PHPUnit_Framework_TestCase
{
    public function testTransform()
    {
        $camelCase = new Format\CamelCase();
        $snakeCase = new Format\SnakeCase();

        $transformer = new CaseTransformer($camelCase, $snakeCase);
        $this->assertEquals('hello_world', $transformer->transform('helloWorld'));

        $transformer = new CaseTransformer($snakeCase, $camelCase);
        $this->assertEquals('helloWorld', $transformer->transform('hello_world'));
    }
}