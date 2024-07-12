<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Src\Book;

$book1 = new Book(
    title: 'Cliean Code: A Handbook of Agile Software Craftsmanship',
    author: 'Robert C. Martin',
    year: 2008,
    price: 40,
);

$book2 = new Book(
    title: 'The Pragmatic Programmer: Your Journey to Mastery',
    author: 'Andrew Hunt, David Thomas',
    year: 1999,
    price: 50,
);

$book3 = new Book(
    title: 'You Don\'t Know JS: ES6 & Beyond',
    author: 'Kyle Simpson',
    year: 2015,
    price: 35,
);


echo $book1->getInfo();
echo $book2->getInfo();
echo $book3->getInfo();