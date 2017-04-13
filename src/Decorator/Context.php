<?php

namespace DP\Decorator;


/**
 * Class Context
 * @package DP\Decorator
 */
class Context
{

    /**
     *
     */
    public function doSomething()
    {
        $dpBook = new Book('Design pattern demo');
        echo $dpBook->getTitle() . PHP_EOL; //Output: Design pattern demo

        $amazonBook = new AmazonBook(new Book('Design pattern demo'));
        echo $amazonBook->getTitle() . PHP_EOL; //Output: Design pattern demo - from amazon.com

        $saleBook = new SaleBook(new Book('Design pattern demo'));
        echo $saleBook->getTitle() . PHP_EOL; //Output: Design pattern demo - sale off

        $amazonSaleBook = new AmazonBook(new SaleBook(new Book('Design pattern demo')));
        echo $amazonSaleBook->getTitle() . PHP_EOL; //Output: Design pattern demo - sale off - from amazon.com
    }
}