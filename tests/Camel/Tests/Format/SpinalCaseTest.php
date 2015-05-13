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

use Camel\Format\SpinalCase;

class SpinalCaseTest extends FormatTest
{
    public function getFormatInstance()
    {
        return new SpinalCase();
    }

    public function provideValidJoins()
    {
        return array(
            array(array('hello', 'world'), 'hello-world'),
            array(array('HeLlO', 'wOrLd'), 'hello-world'),
            array(array('HELLO', 'WORLD'), 'hello-world'),
            array(array('hello', 'my', 'world'), 'hello-my-world'),
        );
    }

    public function provideValidSplits()
    {
        return array(
            array('hello-world', array('hello', 'world')),
            array('HELLO-WORLD', array('HELLO', 'WORLD')),
            array('hello-my-world', array('hello', 'my', 'world')),
        );
    }
}
