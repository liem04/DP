<?php

namespace DP\Strategy;


/**
 * Class Context
 * @package DP\Strategy
 */
class Context
{

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * Context constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     *
     */
    public function doSomething()
    {
        echo PHP_EOL . 'Strategy Context do something' . PHP_EOL;
        $this->logger->log(__FUNCTION__);
        return true;
    }
}