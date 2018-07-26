<?php
namespace DP\Factory\AbstractFactory;

/**
 * Class AbstractFactory
 * @package DP\Factory\AbstractFactory
 */
abstract class AbstractFactory
{
    abstract public function createText(string $text): Text;
}
