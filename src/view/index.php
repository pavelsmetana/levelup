<?php
use App\model\Student;
use App\model\Book;

echo renderHtml("menu");







echo "</br></br> Наши упражнения: </br></br>";
//

$andrew = new Student("Andrey Edjubov");
$pasha = new Student("Pavel Smetana");
$denis = new Student("Denis Kasap");
$book1 = new Book("Captains Daughter", "Alexander Pushkin");
$book2 = new Book ("PHP for Kettles", "Edju Andreev");
$book3 = new Book ("12 Rules For Life", "Dr. Jordan Peterson");
$book4 = new Book ("Martin Eden", "Jack london");
$book5 = new Book("Generic book", "Joe Jones");

$pasha
    ->takeBook($book1)
    ->takeBook($book2)
    ->takeBook($book3);
$andrew
    ->takeBook($book4);
$denis
    ->takeBook($book5);
$pasha->showBooks();
$andrew->showBooks();
$pasha
    ->returnBook($book1);