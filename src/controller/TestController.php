<?php

namespace App\controller;
use App\model\Db;

class TestController
{
    public function showStudents()
    {
        $db = new Db();
        $result  = $db->query("select name from student");
        echo renderHtml("viewaddstudent");
        foreach ($result as $item){
            echo $item["name"] . "</br>";
        }
    }

    public function addStudent(): void
    {
        $student = $_REQUEST['Name'];
        $data = ['name'=>$student];
        $db = new Db();
        $db->query("insert into student (name) values (:name)", $data);
        header("Location: /test");
    }
}
