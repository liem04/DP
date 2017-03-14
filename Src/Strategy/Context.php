<?php

namespace DesignPatterns\Strategy;


/**
 * Class Context
 * @package DesignPatterns\Strategy
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
    public function doDoSomething()
    {
        echo PHP_EOL . 'Do something' . PHP_EOL;
        $this->logger->log(__FUNCTION__);
    }
}