<?php

namespace App\model;

use Symfony\Component\Filesystem\Filesystem;

class File
{
    public const UPLOAD_PATH = "../public/upload/";

    public function listFiles(): array
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

    public function remove(string $filename): void
    {
        unlink(self::UPLOAD_PATH . $filename);
    }

    public function saveFile(string $file)
    {
        echo "saveFile";
    }
}