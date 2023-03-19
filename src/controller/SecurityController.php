<?php

namespace App\controller;

class SecurityController
{

    public function login(): void
    {
        echo renderHtml("login");
        exit;
    }

    public function auth(): void
    {
        $login = $_REQUEST['login'] ?? "";
        $password = $_REQUEST['password'] ?? "";
        authorize($login, $password);
        exit;
    }

    public function logout (): void
    {
        session_destroy();
        header("Location: /");
    }
}
