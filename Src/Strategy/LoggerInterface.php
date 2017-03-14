<?php

namespace DesignPatterns\Strategy;


/**
 * Class LoggerInterface
 * @package DesignPatterns\Strategy
 */
interface LoggerInterface
{

    /**
     * @param string $message
     */
    public function log(string $message);
}