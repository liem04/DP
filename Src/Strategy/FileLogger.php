<?php

namespace DesignPatterns\Strategy;


/**
 * Class FileLogger
 * @package DesignPatterns\Strategy
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