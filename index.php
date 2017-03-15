<?php
require_once __DIR__ . '/vendor/autoload.php';


$testStrategy = new \DP\Strategy\TestStrategy();
$testStrategy->test();

$testSingleton = new \DP\Singleton\TestSingleton();
$testSingleton->test();

$testSimpleFactory = new \DP\Factory\SimpleFactory\TestSimpleFactory();
$testSimpleFactory->test();