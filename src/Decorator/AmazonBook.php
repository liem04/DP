<?php

namespace DP\Decorator;

/**
 * Class AmazonBook
 * @package DP\Decorator
 */
class AmazonBook implements BookInterface
{

    /**
     * @var BookInterface
     */
    private $book;

    /**
     * BookDecorator constructor.
     * @param BookInterface $book
     */
    public function __construct(BookInterface $book)
    {
        $this->book = $book;
    }


    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->book->getTitle() . ' - from amazon.com';
    }
}