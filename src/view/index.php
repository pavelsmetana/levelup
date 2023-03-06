<?php

if (!auth_check()){?>
    <a href="/login">Login</a>
    <?php
}
if (auth_check()){
 ?>
<a href="/logout">Logout</a>
<?php
}
//$request = $_SERVER["REQUEST_URI"];
//if($request === "/test"){
//    echo renderhtml("page1");
//}

