<?php
namespace DP\Decorator;

/**
 * Class Book
 * @package DP\Decorator
 */
class Book implements BookInterface
{

    /**
     * @var string
     */
    private $title;

    /**
     * Book constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}