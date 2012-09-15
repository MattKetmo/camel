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

use Camel\Format\SnakeCase;

class SnakeCaseTest extends FormatTest
{
    public function getFormatInstance()
    {
        return new SnakeCase();
    }

    public function provideValidJoins()
    {
        return array(
            array(array('hello', 'world'), 'hello_world'),
            array(array('HeLlO', 'wOrLd'), 'hello_world'),
            array(array('HELLO', 'WORLD'), 'hello_world'),
            array(array('hello', 'my', 'world'), 'hello_my_world'),
        );
    }

    public function provideValidSplits()
    {
        return array(
            array('hello_world', array('hello', 'world')),
            array('HELLO_WORLD', array('HELLO', 'WORLD')),
            array('hello_my_world', array('hello', 'my', 'world')),
        );
    }
}
