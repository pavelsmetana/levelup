<?php

function renderhtml(string $file, array $data = []){
    include_once "view/menu.php"; //тут просто ссылки меню в отдельном файле:)
    extract($data);

    ob_start();
    include "view/{$file}.php";

    $result = ob_get_contents();
    ob_end_clean();

    return $result;
}
function auth_check(): bool //проверяет авторизован ли пользователь
{
    if(isset($_SESSION["status"]) && $_SESSION["status"] === "authorised"){
        return true;
    }
    else {
        return false;
    }
}

function authorize(string $login, string $password){    //функция авторизации, получает логин и пароль

    $truelogin = "Deniska";    //это надо проверять из БД в будущем
    $truepassword = "Rediska";

    $referer = $_SESSION['referer'];    //записываем из Сессии путь откуда юзер пришёл. В Сессию его записали в логин.пхп
    if ($login === $truelogin && $password === $truepassword) { //если переданный в функцию логин и пароль совпадают:
        $_SESSION["status"] = "authorised";                     //записываем в Сессию статус Авторайзед
        header("Location: $referer");                   //и отправляем юзера туда откуда пришёл

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