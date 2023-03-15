<?php

namespace App\model;

class Student
{
     public string $name;
     private array $readingBooks;

     public function __construct(string $name)
     {
         $this->name = $name;
     }

     public function takeBook(Book $book){
         echo "The book ". $book->name ." by " . $book->author . " has been taken by " . $this->name. ". </br> ";
         $this->readingBooks[] = $book;
         return $this;
     }

     public function returnBook(Book $book){
         echo "The book ". $book->name ." has been returned by " . $this->name. ". </br> ";
         unset($this->readingBooks[array_search($book, $this->readingBooks)]);
         return $this;
     }

     public function showBooks(){
         $bookslist = $this->readingBooks;
         echo $this->name . " now reading ";
         foreach ($bookslist as $book){
             echo $book->name . ", ";
         }
         echo "</br>";
     }

}