<?php

namespace DP\Decorator;


/**
 * Class SaleBook
 * @package DP\Decorator
 */
class SaleBook implements BookInterface
{

    /**
     * @var BookInterface
     */
    private $book;

    /**
     * SaleBook constructor.
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
        return $this->book->getTitle() . ' - sale off';
    }
}