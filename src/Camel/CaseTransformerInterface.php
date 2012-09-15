<?php

/*
 * This file is part of Camel.
 *
 * (c) Matthieu Moquet <matthieu@moquet.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Camel;

/**
 * Transform the case of a word.
 *
 * @author Matthieu Moquet <matthieu@moquet.net>
 */
interface CaseTransformerInterface
{
    /**
     * Transform a word from a case format to an other.
     *
     * @param string $word The initial word
     *
     * @return string The transformed word
     */
    public function transform($word);
}