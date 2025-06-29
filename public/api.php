<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Actions/IncrementAction.php';
require_once __DIR__ . '/../src/Actions/DecrementAction.php';

use App\Actions\IncrementAction;
use App\Actions\DecrementAction;
use starfederation\datastar\ServerSentEventGenerator;

// A very simple router
$path = $_SERVER['PATH_INFO'] ?? '/';

$sse = new ServerSentEventGenerator();

switch ($path) {
    case '/increment':
        $action = new IncrementAction();
        $action->handle($sse);
        break;
    case '/decrement':
        $action = new DecrementAction();
        $action->handle($sse);
        break;
    default:
        http_response_code(404);
        echo 'Not Found';
}