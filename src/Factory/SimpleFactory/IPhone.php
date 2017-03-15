<?php

namespace DP\Factory\SimpleFactory;


/**
 * Class IPhone
 * @package DP\Factory\SimpleFactory
 */
class IPhone implements MobileInterface
{

    /**
     * @return bool
     */
    public function call()
    {
        echo PHP_EOL . 'IPhone calling' . PHP_EOL;
        return true;
    }
}