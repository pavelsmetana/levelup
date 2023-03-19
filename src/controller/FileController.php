<?php

namespace App\controller;

use App\model\File;
use Symfony\Component\Filesystem\Filesystem;

class FileController
{

    public function list(): void
    {
        $file = new File();
        echo renderHtml("uploads", ["files" => $file->listFiles()]);
    }

    public function upload(): void
    {
        if (isset($_FILES["myfile"])) {
            move_uploaded_file($_FILES["myfile"]["tmp_name"], File::UPLOAD_PATH . $_FILES["myfile"]["name"]);
        }

        header("Location: /uploads");
    }

    public function clear(): void
    {
        $filesystem = new Filesystem();
        $file = new File();

        foreach ($file->listFiles() as $item) {
            $filesystem->remove(File::UPLOAD_PATH ."$item");
        }
    }
    public function removeFile(string $filename) : void
    {
        $file = new File();
        $file->remove(urldecode($filename));
        header("Location: /uploads");
    }
}
