<?php

//require_once "src/TaskController.php";

ini_set("display_errors", "On");

require "vendor/autoload.php";

set_exception_handler("ErrorHandler::handleException");

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$parts = array_filter(explode("/", $path));

print_r($parts);

echo "\n";

$resource = $parts[1] ?? null;

$id = $parts[2] ?? null;

$method = $_SERVER['REQUEST_METHOD'];

echo $method . "\n";




header("Content-type: application/json; charset=UTF-8");

if ($resource != "task") {
    ;
    http_response_code(404);
    exit;
}

$database = new Database("localhost", "api_db", "root", "");

$database->getConnection();

$controller = new TaskController;

$controller->processRequest($method, $id);