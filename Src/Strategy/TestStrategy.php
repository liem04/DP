<?php

namespace DesignPatterns\Strategy;


/**
 * Class TestStrategy
 * @package DesignPatterns\Strategy
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