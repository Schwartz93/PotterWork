<?php

namespace App;

class BookHandler
{

    const FILEPATH = __DIR__ . "/../data/books.json";

    public function getBooks()
    {
        $json = file_get_contents(self::FILEPATH);
        $json_data = json_decode($json, true);

        return ($json_data);
    }

    public function getCopiesBook1()
    {
        if (isset($_POST['copiesPotter1']) && !empty($_POST['copiesPotter1'])) {
            $copiesPotter1 = $_POST['copiesPotter1'];
            return intval($copiesPotter1);
        }
    }

    public function getCopiesBook2()
    {
        if (isset($_POST['copiesPotter2']) && !empty($_POST['copiesPotter2'])) {
            $copiesPotter2 = $_POST['copiesPotter2'];
            return intval($copiesPotter2);
        }
    }

    public function getCopiesBook3()
    {
        if (isset($_POST['copiesPotter3']) && !empty($_POST['copiesPotter3'])) {
            $copiesPotter3 = $_POST['copiesPotter3'];
            return intval($copiesPotter3);
        }
    }

    public function getCopiesBook4()
    {
        if (isset($_POST['copiesPotter4']) && !empty($_POST['copiesPotter4'])) {
            $copiesPotter4 = $_POST['copiesPotter4'];
            return intval($copiesPotter4);
        }
    }

    public function getCopiesBook5()
    {
        if (isset($_POST['copiesPotter5']) && !empty($_POST['copiesPotter5'])) {
            $copiesPotter5 = $_POST['copiesPotter5'];
            return intval($copiesPotter5);
        }
    }
}

