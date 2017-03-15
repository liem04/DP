<?php
namespace DP\Singleton;

/**
 * Class Context
 * @package DP\Singleton
 */
class Context
{

    /**
     * @var Context
     */
    private static $instance;

    /**
     * Context constructor.
     */
    protected function __construct()
    {
    }

    /**
     * @return Context
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     *
     */
    public function doSomething()
    {
        echo PHP_EOL . 'Singleton Context do something' . PHP_EOL;
    }
}