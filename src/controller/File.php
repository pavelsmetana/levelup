<?php

namespace App\controller;

class File
{
    public const UPLOAD_PATH = "../public/upload/";
    function listFiles(): array
    {
        $files = scandir(self::UPLOAD_PATH);

        $result = [];

        foreach ($files as $file) {
            if ($file === ".") {
                continue;
            }

            if ($file === "..") {
                continue;
            }

            $result[] = $file;;
        }

        return $result;
    }
}