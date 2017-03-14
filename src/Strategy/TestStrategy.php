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
        $context = new Context(new FileLogger());
        $context->doDoSomething();

        $context = new Context(new MongoLogger());
        $context->doDoSomething();
    }
}