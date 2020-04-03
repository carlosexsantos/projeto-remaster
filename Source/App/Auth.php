<?php

namespace Source\App;

use Source\Models\User;

/** 
* Class Auth
*/
class Auth extends Controller{
    
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function login($data): void
    {
        @$username = filter_var($data["username"], FILTER_DEFAULT);
        @$password = filter_var($data["password"], FILTER_DEFAULT);

        if(!$username || !$password) {
            echo $this->ajaxResponse("message", [
                "type" => "warning",
                "title" => "Atenção",
                "message" => "Insira usuário e senha para continuar"
            ]);
            return;
        }

        $user = (new User())->find("username = :u", "u={$username}")->fetch();

        if(!$user || !User::verifyPass($password, $user->password)) {
            echo $this->ajaxResponse("message", [
                "type" => "error",
                "title" => "Erro",
                "message" => "Usuário e/ou senha incorretos"
            ]);
            return;
        }

        $_SESSION["user"] = $user->id;

        echo $this->ajaxResponse("redirect", [
            "url" => $this->router->route("app.home")
        ]);

        return;

    }

}