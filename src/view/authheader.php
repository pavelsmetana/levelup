<?php
if (!auth_check()) : ?>
    <a href="/login">Login</a>
<?php else : ?>
    <a href="/logout">Logout</a>
<?php endif;
