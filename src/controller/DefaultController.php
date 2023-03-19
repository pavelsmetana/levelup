<?php

namespace App\controller;

class DefaultController extends Controller
{
    public function index(): void
    {
        echo renderHtml("index");
        exit;
    }

    public function page(): void
    {
        $request = $_SERVER["REQUEST_URI"];
        $request = str_replace("/", "", $request);

        echo renderHtml($request);
    }
}

