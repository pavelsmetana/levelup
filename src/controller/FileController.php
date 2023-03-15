<?php

namespace App\controller;

use Symfony\Component\Filesystem\Filesystem;

class FileController
{

    public function list()
    {
        $file = new File();
        echo renderHtml("uploads", ["files" => $file->listFiles()]);
    }

    /**
     * @return void
     */
    public function upload() {
        if (isset($_FILES["myfile"])) {
            move_uploaded_file($_FILES["myfile"]["tmp_name"], File::UPLOAD_PATH . $_FILES["myfile"]["name"]);
        }
        header("Location: /uploads");
    }

    public function clear()
    {
        $filesystem = new Filesystem();
        $file = new File();
        foreach ($file->listFiles() as $item) {
            $filesystem->remove(File::UPLOAD_PATH ."$item");
        }

    }

}

