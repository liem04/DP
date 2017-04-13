<?php

namespace DP\Decorator;


/**
 * Class TestDecorator
 * @package DP\Decorator
 */
class TestDecorator
{

    /**
     *
     */
    public function test()
    {
        echo PHP_EOL . 'Test decorator:' . PHP_EOL;
        $context = new Context();
        $context->doSomething();
    }
}