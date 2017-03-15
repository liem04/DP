<?php

namespace DP\Factory\SimpleFactory;

/**
 * Class MobileFactory
 * @package DP\Factory\SimpleFactory
 */
class MobileFactory
{

    CONST NOKIA = 'Nokia';
    CONST IPHONE = 'IPhone';

    /**
     * @param string $name
     * @return MobileInterface
     * @throws \InvalidArgumentException
     */
    public function make(string $name)
    {
        switch ($name) {
            case self::NOKIA:
                return new Nokia();
            case self::IPHONE:
                return new IPhone();
            default:
                throw new \InvalidArgumentException('Invalid mobile name: ' . $name);
        }
    }
}