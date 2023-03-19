<?php

namespace App\controller;
use Book;
use Student;

class StudentController
{
    private array $students = [];

    public function list()
    {
        echo 'Place holder. List of books here';
//        return $this->students;
    }

    public function addStudent(string $name)
    {
        $student[] = new Student($name);
    }

    public function takeBook(Student $student, Book $book)
    {

    }

}