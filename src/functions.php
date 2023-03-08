<?php

function upload() {
    if (isset($_FILES["myfile"])) {
        move_uploaded_file($_FILES["myfile"]["tmp_name"], "../public/upload/" . $_FILES["myfile"]["name"]);
    }
}

function renderHtml(string $file, array $data = []){

    extract($data);

    ob_start();
    include "view/{$file}.php";

    $result = ob_get_contents();
    ob_end_clean();

    return $result;
}

function listFiles(): array{
    $files = scandir("../public/upload");

    $result = [];

    foreach ($files as $file) {
        if ($file === ".") {
            continue;
        }

        if ($file === "..") {
            continue;
        }

        $result[] = $file;
        $result = pathinfo($file);
    }

    return $result;
}


function auth_check(): bool //проверяет авторизован ли пользователь
{
    if(isset($_SESSION["status"]) && $_SESSION["status"] === "authorised"){
        return true;
    } else {
        return false;
    }
}

function authorize(string $login, string $password){    //функция авторизации, получает логин и пароль

    $truelogin = "Deniska";    //это надо проверять из БД в будущем
    $truepassword = "Rediska";

    $backurl = $_REQUEST['backurl'];

    if ($backurl === "/login") :
        $backurl = "/";
    endif;

    if ($login === $truelogin && $password === $truepassword) { //если переданный в функцию логин и пароль совпадают:
        $_SESSION["status"] = "authorised";                     //записываем в Сессию статус Авторайзед
        header("Location: $backurl");                   //и отправляем юзера туда откуда пришёл

        exit();
    }
    else {
        $_SESSION["status"] = "not authorized";
        $_SESSION["message"] = "Wrong Login or Password";
        header("Location: /login");
    }
}

function logout (){
    session_destroy();
    header("Location: /");
}