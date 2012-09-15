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

abstract class FormatTest extends \PHPUnit_Framework_TestCase
{
    protected $format;

    public function setUp()
    {
        $this->format = $this->getFormatInstance();
    }

    /**
     * @dataProvider provideValidJoins
     */
    public function testJoin(array $inputWords, $expectedWord)
    {
        $this->assertEquals($this->format->join($inputWords), $expectedWord);
    }

    /**
     * @dataProvider provideValidSplits
     */
    public function testSplit($inputWord, array $expectedWords)
    {
        $this->assertEquals($this->format->split($inputWord), $expectedWords);
    }

    abstract public function getFormatInstance();

    abstract public function provideValidJoins();

    abstract public function provideValidSplits();
}
