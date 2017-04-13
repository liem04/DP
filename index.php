<?php
use DP\Decorator\TestDecorator;
use DP\Factory\SimpleFactory\TestSimpleFactory;
use DP\Singleton\TestSingleton;
use DP\Strategy\TestStrategy;

require_once __DIR__ . '/vendor/autoload.php';


$testStrategy = new TestStrategy();
$testStrategy->test();

$testSingleton = new TestSingleton();
$testSingleton->test();

$testSimpleFactory = new TestSimpleFactory();
$testSimpleFactory->test();

$testDecorator = new TestDecorator();
$testDecorator->test();