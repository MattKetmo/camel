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
 * Format to handle spinal-case.
 *
 * @author Denis Roussel <denis.roussel@gmail.com>
 */
class SpinalCase implements FormatInterface
{
    /**
     * {@inheritdoc}
     */
    public function split($word)
    {
        return explode('-', $word);
    }

    /**
     * {@inheritdoc}
     */
    public function join(array $words)
    {
        // Ensure words are lowercase
        $words = array_map('strtolower', $words);

        return implode('-', $words);
    }
}
