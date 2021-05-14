<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\HttpFoundation\Request;

require dirname(__DIR__) . '/vendor/autoload.php';
$url = parse_url(getenv('CLEARDB_DATABASE_URL'));

$server = $url['host'];
$username = $url['user'];
$password = $url['pass'];
$db = substr($url['path'], 1);

$conn = new mysqli($server, $username, $password, $db);

(new Dotenv())->bootEnv(dirname(__DIR__) . '/.env');
if ($_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
