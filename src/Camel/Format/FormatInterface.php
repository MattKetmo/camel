<?php

/*
 * This file is part of Camel.
 *
 * (c) Matthieu Moquet <matthieu@moquet.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Camel\Format;

/**
 * Handler to convert from a case to another.
 *
 * The idea is to split the given word into several words and then assemble them
 * with another format.
 *
 * Example: camelCase => [camel, Case] => camel_case
 *
 * @author Matthie Moquet <matthieu@moquet.net>
 */
interface FormatInterface
{
    /**
     * Split a word in the initial case into several words.
     *
     * @param string $word The initial word
     *
     * @return array An array of string
     */
    public function split($word);

    /**
     * Joins array of words to render the desired case.
     *
     * @param array words Array of string
     *
     * @return string The final word
     */
    public function join(array $words);
}
