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

use Camel\Format\ScreamingSnakeCase;

class ScreamingSnakeCaseTest extends FormatTest
{
    public function getFormatInstance()
    {
        return new ScreamingSnakeCase();
    }

    public function provideValidJoins()
    {
        return array(
            array(array('hello', 'world'), 'HELLO_WORLD'),
            array(array('HeLlO', 'wOrLd'), 'HELLO_WORLD'),
            array(array('HELLO', 'WORLD'), 'HELLO_WORLD'),
            array(array('hello', 'my', 'world'), 'HELLO_MY_WORLD'),
        );
    }

    public function provideValidSplits()
    {
        return array(
            array('hello_world', array('hello', 'world')),
            array('HELLO_WORLD', array('HELLO', 'WORLD')),
            array('HELLO_MY_WORLD', array('HELLO', 'MY', 'WORLD')),
        );
    }
}
