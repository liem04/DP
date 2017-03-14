<?php
namespace DP\Strategy;

/**
 * Class ContextTest
 * @package DP\Strategy
 */
class ContextTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testDoSomething()
    {
        $logger = $this->getMockBuilder(LoggerInterface::class)->disableOriginalConstructor()->getMock();
        $logger->method('log')->willReturn('');

        $context = new Context($logger);
        static::assertTrue($context->doDoSomething());
    }
}