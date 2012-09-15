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

use Camel\Format\FormatInterface;

/**
 * Global transformer used to manage format conversion.
 *
 * @author Matthieu Moquet <matthieu@moquet.net>
 */
class CaseTransformer implements CaseTransformerInterface
{
    /**
     * @var FormatInterface Initial case format
     */
    protected $from;

    /**
     * @var FormatInterface Final case format
     */
    protected $to;

    /**
     * @param FormatInterface $from
     * @param FormatInterface $to
     */
    public function __construct(FormatInterface $from, FormatInterface $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($word)
    {
        $words = $this->from->split($word);

        return $this->to->join($words);
    }
}