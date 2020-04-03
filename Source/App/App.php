<?php

namespace Source\App;

use Source\Models\User;

class App extends Controller
{
    /** @var User */
    protected $user;

    public function __construct($router)
    {
        parent::__construct($router);

        if(empty($_SESSION["user"]) || !$this->user = (new User())->findById($_SESSION["user"])){
            unset($_SESSION["user"]);

            $this->router->redirect("web.login");
        }

    }

    public function home(): void
    {
        echo $this->view->render("dashboard", [
            "user" => $this->user
        ]);
    }

    public function logout(): void
    {
        unset($_SESSION["user"]);

        $this->router->redirect("web.login");
    }
}