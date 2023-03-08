<?php
echo renderHtml("menu");

if (isset ($_SERVER['HTTP_REFERER'])){       //проверяем, записался ли адрес страницы откуда пришёл пользователь
    $referer = parse_url($_SERVER['HTTP_REFERER']); //парсим путь и записываем в hidden форму
    $x = $referer['path'];
}

if (isset($_SESSION["message"])) {
    echo $_SESSION["message"];
}?>
<form action="/auth" name="auth" method="post">
    <input type="text"  placeholder="login" name="login">
    <input type="password" placeholder="password" name="password">
    <input type="hidden" name="backurl" value="<?php echo $x; ?>">
    <input type="submit" value="Log in">
</form>

