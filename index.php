<?php 

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/**
* Controllers
*/
$router->namespace("Source\App");

/**
* WEB
* Home
*/
$router->group(null);
$router->get("/", "Login:home");
$router->post("/", "Login:login", "form.login");
$router->get("/contato", "Login:contact");
$router->get("/index", "Login:index");
$router->get("/esqueceu-a-senha", "Login:forgotPass");

/**
* Erros
*/
$router->group("erro");
$router->get("/{errcode}", "Login:error");

$router->dispatch();

if ($router->error()) {
	$router->redirect("/erro/{$router->error()}");
}