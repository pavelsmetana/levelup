<?php

namespace App\controller;

class Controller
{
    function renderHtml(string $file, array $data = []) : string
    {
        extract($data);

        ob_start();
        include "view/{$file}.php";

        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}