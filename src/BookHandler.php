<?php

namespace App;

class BookHandler {

    const FILEPATH = __DIR__ . "/../data/books.json";

    public function getBooks()
    {
        $json = file_get_contents(self::FILEPATH);
        $json_data = json_decode($json,true);
        return($json_data);
    }
}

