<?php 

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;

class Login
{
	private $view;

	public function __construct($router)
	{
		$this->view = Engine::create(__DIR__ . "/../../themes/login", "php");

		$this->view->addData(["router" => $router]);
	}

	public function home($data): void
	{
		$users = (new User())->find()->fetch(true);

		echo $this->view->render("home", [
			"title" => "Login | " . SITE
		]);
	}	

	public function contact($data): void
	{
		echo "<h1>Contato</h1>";
		var_dump($data);
	}

	public function index($data): void
	{
		echo $this->view->render("inicio", [
			"title" => "Inicio | " . SITE
		]);
	}

	public function forgotPass($data): void
	{
		echo $this->view->render("forgotPass", [
			"title" => "Esqueci minha senha | " . SITE
		]);
	}

	public function login(array $data): void
	{
		$callback["data"] = $data;
		echo json_encode($data);
	}

	public function error(array $data): void
	{
		echo "<h1>Erro {$data["errcode"]}</h1>";
		var_dump($data);
	}
}