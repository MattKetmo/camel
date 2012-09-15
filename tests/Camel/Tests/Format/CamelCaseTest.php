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

use Camel\Format\CamelCase;

class CamelCaseTest extends FormatTest
{
    public function getFormatInstance()
    {
        return new CamelCase();
    }

    public function provideValidJoins()
    {
        return array(
            array(array('hello', 'world'), 'helloWorld'),
            array(array('HeLlO', 'wOrLd'), 'helloWorld'),
            array(array('HELLO', 'WORLD'), 'helloWorld'),
            array(array('hello', 'my', 'world'), 'helloMyWorld'),
        );
    }

    public function provideValidSplits()
    {
        return array(
            array('helloWorld', array('hello', 'World')),
            array('helloMyWorld', array('hello', 'My', 'World')),
        );
    }
}
