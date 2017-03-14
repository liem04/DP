<?php


namespace DesignPatterns\Strategy;


/**
 * Class MongoLogger
 * @package DesignPatterns\Strategy
 */
class MongoLogger implements LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message)
    {
        echo 'Logged to mongo: ' . $message;
    }
}