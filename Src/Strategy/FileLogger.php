<?php

namespace DP\Strategy;


/**
 * Class FileLogger
 * @package DP\Strategy
 */
class FileLogger implements LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message)
    {
        echo 'Logged to file: ' . $message;
    }
}