<?php

namespace DP\Strategy;


/**
 * Class TestStrategy
 * @package DP\Strategy
 */
class TestStrategy
{
    /**
     *
     */
    public function test()
    {
        echo PHP_EOL . 'Test strategy:' . PHP_EOL;
        $context = new Context(new FileLogger());
        $context->doSomething();

        $context = new Context(new MongoLogger());
        $context->doSomething();
    }
}