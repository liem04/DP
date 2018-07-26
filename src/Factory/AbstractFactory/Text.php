<?php

namespace DP\Factory\AbstractFactory;

/**
 * Class Text
 * @package DP\Factory\AbstractFactory
 */
abstract class Text
{
    /**
     * @var string
     */
    private $text;

    /**
     * Text constructor.
     * @param string $text
     */
    public function __construct($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}
