<?php

namespace DP\Factory\SimpleFactory;


/**
 * Class TestSimpleFactory
 * @package DP\Factory\SimpleFactory
 */
class TestSimpleFactory
{

    /**
     * @throws \InvalidArgumentException
     */
    public function test()
    {
        echo PHP_EOL . 'Test SimpleFactory:' . PHP_EOL;
        $context = new Context();
        $context->doSomething();
    }
}