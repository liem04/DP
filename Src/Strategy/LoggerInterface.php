<?php

namespace DP\Strategy;


/**
 * Class LoggerInterface
 * @package DP\Strategy
 */
interface LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message);
}