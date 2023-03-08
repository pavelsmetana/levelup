<?php

$request = $_SERVER["REQUEST_URI"] ?? "/";
if($request === "/test"){
    echo renderHtml("page1");
    exit;
}
if ($request === "/login"){
    echo renderHtml("login");
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

if ($request === "/view-upload"){
    echo renderHtml("view-upload");
    exit;
}

if ($request === "/view-files"){
    echo renderHtml("list", ["files" => listFiles()]);
    exit;
}

if ($request === "/file-upload"){
    upload();
    exit;
}

if ($request === "/about"){
    echo renderHtml("about");
}


if ($request === "/contacts"){
    echo renderHtml("contacts");
}

if ($request === "/"){
    echo renderHtml("index");
}