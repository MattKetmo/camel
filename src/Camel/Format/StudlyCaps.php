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
 * Format to handle StudlyCaps.
 *
 * @author Matthieu Moquet <matthieu@moquet.net>
 */
class StudlyCaps implements FormatInterface
{
    /**
     * {@inheritdoc}
     */
    public function split($word)
    {
        // Match camelCase
        $pattern = '/   # Match position between camelCase "words".
            (?<=[a-z])  # Position is after a lowercase,
            (?=[A-Z])   # and before an uppercase letter.
            /x';

        $words = preg_split($pattern, $word);

        return $words;
    }

    /**
     * {@inheritdoc}
     */
    public function join(array $words)
    {
        // Ensure words are lowercase
        $words = array_map('strtolower', $words);

        // UC first each words
        $words = array_map('ucfirst', $words);

        return implode('', $words);
    }
}
