<?php

namespace DP\Singleton;


/**
 * Class TestSingleton
 * @package DP\Singleton
 */
class TestSingleton
{
    /**
     *
     */
    public function test()
    {
        echo PHP_EOL . 'Test singleton:' . PHP_EOL;
        $context = Context::getInstance();
        $context->doSomething();
    }
}