<?php

namespace Src;

use Src\Interfaces\BookInterface;

class Book implements BookInterface
{
    // Constructor by new PHP version
    public function __construct(
        public string $title,
        public string $author,
        public int $year,
        public int $price,
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
    }

    // Get info function
    public function getInfo(): string
    {
        return "Title: $this->title\n
        Author: $this->author\n
        Year: $this->year\n
        Price: $$this->price\n";
    }
}