<?php

namespace DP\Factory\SimpleFactory;


/**
 * Class Nokia
 * @package DP\Factory\SimpleFactory
 */
class Nokia implements MobileInterface
{

    /**
     * @return bool
     */
    public function call()
    {
        echo PHP_EOL . 'Nokia calling' . PHP_EOL;
        return true;
    }
}