<?php
require_once __DIR__ . '/vendor/autoload.php';


$testStrategy = new \DesignPatterns\Strategy\TestStrategy();
$testStrategy->test();