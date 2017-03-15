<?php


namespace DP\Strategy;


/**
 * Class MongoLogger
 * @package DP\Strategy
 */
class MongoLogger implements LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message)
    {
        echo 'Logged to mongo: ' . $message . PHP_EOL;
    }
}