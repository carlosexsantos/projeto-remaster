<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Web
{
    private $view;

    public function __construct ($router)
    {
		$this->view = Engine::create(__DIR__ . "/../../themes/app", "php");

		$this->view->addData(["router" => $router]);
    }
}