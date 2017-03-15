<?php

namespace DP\Factory\SimpleFactory;


/**
 * Class Context
 * @package DP\Factory\SimpleFactory
 */
class Context
{

    /**
     * @throws \InvalidArgumentException
     */
    public function doSomething()
    {
        $factory = new MobileFactory();
        $mobile = $factory->make('Nokia');
        $mobile->call();

        $mobile = $factory->make('IPhone');
        $mobile->call();
    }
}