<?php

namespace Source\App;

use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller
{
    protected $view;

    protected $router;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(dirname(__DIR__, 2) . "/views", "php");
        $this->view->addData(["router" => $this->router]);
    }

    public function ajaxResponse(string $param, array $values): string
    {
        return json_encode([$param => $values]);
    }

}