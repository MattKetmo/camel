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
 * Format to handle SCREAMING_SNAKE_CASE.
 *
 * @author Matthieu Moquet <matthieu@moquet.net>
 */
class ScreamingSnakeCase extends SnakeCase
{
    /**
     * {@inheritdoc}
     */
    public function join(array $words)
    {
        return strtoupper(parent::join($words));
    }
}
