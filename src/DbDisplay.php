<?php

namespace App;
use App\BookHandler;

class DbDisplay
{
    public function displayBooks()
    {
        $books = new BookHandler();
        $json_data = $books->getBooks();

        foreach ($json_data as $data) {
            echo $data['title'] . "<br>";
        }
    }
}