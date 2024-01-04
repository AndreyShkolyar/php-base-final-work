<?php

use App\Controllers\Test;

require_once 'vendor/autoload.php';

$uriList = [
    '/test' => [
        'GET' => [Test::class, 'test'],
        'PUT' => [Test::class, 'put']
    ]
];

$uri = strtok($_SERVER['REQUEST_URI'], '?');
$requestMethod = $_SERVER['REQUEST_METHOD'];

if (array_key_exists($uri, $uriList) && array_key_exists($requestMethod, $uriList[$uri]))  {
    $class = new $uriList[$uri][$requestMethod][0];
    $classMethod = $uriList[$uri][$requestMethod][1];
    $class->$classMethod();
}