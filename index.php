<?php
require __DIR__ . '/vendor/autoload.php';

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app = AppFactory::create();

$app->get('/ping', function (Request $request, Response $response) {
    $data = [
        'status' => 'ok',
        'message' => 'Ingrid is alive and listening'
    ];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
