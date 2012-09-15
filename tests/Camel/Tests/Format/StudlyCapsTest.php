<?php

/*
 * This file is part of Camel.
 *
 * (c) Matthieu Moquet <matthieu@moquet.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Camel\Tests\Format;

use Camel\Format\StudlyCaps;

class StudlyCapsTest extends FormatTest
{
    public function getFormatInstance()
    {
        return new StudlyCaps();
    }

    public function provideValidJoins()
    {
        return array(
            array(array('hello', 'world'), 'HelloWorld'),
            array(array('HeLlO', 'wOrLd'), 'HelloWorld'),
            array(array('HELLO', 'WORLD'), 'HelloWorld'),
            array(array('hello', 'my', 'world'), 'HelloMyWorld'),
        );
    }

    public function provideValidSplits()
    {
        return array(
            array('HelloWorld', array('Hello', 'World')),
            array('helloWorld', array('hello', 'World')),
            array('HelloMyWorld', array('Hello', 'My', 'World')),
        );
    }
}
