<?php

namespace DP\Factory\AbstractFactory;

/**
 * Class HtmlFactory
 * @package DP\Factory\AbstractFactory
 */
class HtmlFactory extends AbstractFactory
{
    /**
     * @param string $text
     * @return Text
     */
    public function createText(string $text): Text
    {
        return new HtmlText($text);
    }
}
