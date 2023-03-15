<?php

namespace App\controller;

class DefaultController extends Controller
{
    public function index()
    {
        echo renderHtml("index");
        exit;
    }

    public function page()
    {
        $request = $_SERVER["REQUEST_URI"];
        $request = str_replace("/", "", $request);

        echo renderHtml($request);

    }

}

