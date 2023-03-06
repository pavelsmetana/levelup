<?php
if (isset ($_SERVER['HTTP_REFERER'])){       //проверяем, записался ли адрес страницы откуда пришёл пользователь
    $referer = parse_url($_SERVER['HTTP_REFERER']); //парсим путь чтобы из абсолютного вычленить относительный
    $_SESSION["referer"] = $referer["path"];  //записываем путь в Сессию Реферер
}

if (isset($_SESSION["message"])) {
    echo $_SESSION["message"];
}?>
<form action="/auth" name="auth" method="post">
    <input type="text"  placeholder="login" name="login">
    <input type="password" placeholder="password" name="password">
    <input type="hidden" name="backurl" value="<?php echo $_SESSION["referer"] ?>">
    <input type="submit" value="Log in">
</form>

