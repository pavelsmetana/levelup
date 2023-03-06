<?php

$request = $_SERVER["REQUEST_URI"] ?? "/";
if($request === "/test"){
    echo renderhtml("page1");
    exit;
}
if ($request === "/login"){
    echo renderhtml("login");
    exit;
}

if ($request === "/logout"){
    logout();
    exit;
}

if ($request === "/auth"){
    $login = $_REQUEST['login'] ?? "";
    $password = $_REQUEST['password'] ?? "";
    authorize($login, $password);
    exit;
}

if ($request === "/about"){
    echo renderhtml("about");
}


if ($request === "/contacts"){
    echo renderhtml("contacts");
}

echo renderhtml("index");
