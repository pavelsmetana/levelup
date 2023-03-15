<?php

namespace App\controller;

class SecurityController
{

    public function login()
    {
        echo renderHtml("login");
        exit;
    }

    public function auth()
    {
        $login = $_REQUEST['login'] ?? "";
        $password = $_REQUEST['password'] ?? "";
        authorize($login, $password);
        exit;
    }


    public function logout (){
        session_destroy();
        header("Location: /");
    }

}