<?php

namespace App;


class DisplaySelectedBooks
{
    public function displayBooks()
    {
        $select = new BookHandler();
        $books = new BookHandler();
        $data = $books->getBooks();

        $selectedPotter1 = $select->getCopiesBook1();
        $selectedPotter2 = $select->getCopiesBook2();
        $selectedPotter3 = $select->getCopiesBook3();
        $selectedPotter4 = $select->getCopiesBook4();
        $selectedPotter5 = $select->getCopiesBook5();

        echo "<h3>Selected Items:</h3>";
        echo "<table class='table'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th scope='col'>Title</th>";
                    echo "<th scope='col'>Year</th>";
                    echo "<th scope='col'>Number of Copies</th>";
                    echo "<th scope='col'>Price</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
        if ($selectedPotter1 > 0) {
            echo "<tr>";
            echo "<td>" . $data[0]['title'] . "</td>";
            echo "<td>" . $data[0]['year'] . "</td>";
            echo "<td>" . $selectedPotter1 . "</td>";
            echo "<td>" . "8€" . "</td>";
            echo "</tr>";
        }
        if ($selectedPotter2 > 0) {
            echo "<tr>";
            echo "<td>" . $data[1]['title'] . "</td>";
            echo "<td>" . $data[1]['year'] . "</td>";
            echo "<td>" . $selectedPotter2 . "</td>";
            echo "<td>" . "8€" . "</td>";
            echo "</tr>";
        }
        if ($selectedPotter3 > 0) {
            echo "<tr>";
            echo "<td>" . $data[2]['title'] . "</td>";
            echo "<td>" . $data[2]['year'] . "</td>";
            echo "<td>" . $selectedPotter3 . "</td>";
            echo "<td>" . "8€" . "</td>";
            echo "</tr>";
        }
        if ($selectedPotter4 > 0) {
            echo "<tr>";
            echo "<td>" . $data[3]['title'] . "</td>";
            echo "<td>" . $data[3]['year'] . "</td>";
            echo "<td>" . $selectedPotter4 . "</td>";
            echo "<td>" . "8€" . "</td>";
            echo "</tr>";
        }
        if ($selectedPotter5 > 0) {
            echo "<tr>";
            echo "<td>" . $data[4]['title'] . "</td>";
            echo "<td>" . $data[4]['year'] . "</td>";
            echo "<td>" . $selectedPotter5 . "</td>";
            echo "<td>" . "8€" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function displayTotal()
    {
        $total = new CalculatePrice();
        $totalprice = $total->calculateSelectedBookprice();

        echo $totalprice;
    }
}