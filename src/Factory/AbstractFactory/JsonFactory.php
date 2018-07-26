<?php

namespace DP\Factory\AbstractFactory;

/**
 * Class JsonFactory
 * @package DP\Factory\AbstractFactory
 */
class JsonFactory extends AbstractFactory
{
    /**
     * @param string $text
     * @return Text
     */
    public function createText(string $text): Text
    {
        return new JsonText($text);
    }
}
