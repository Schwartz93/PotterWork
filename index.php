<?php
require "vendor/autoload.php";

use App\BookHandler;
use App\DisplaySelectedBooks;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Harry Potter</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h2 style="margin: 0 auto">Harry Potter books</h2>
</nav>
<div class="container">
    <h3>Today: Up to 25% discount deal</h3>
    <p class="lead">
        <strong>One copy of any of the five books costs 8 EUR.
            If, however, you buy two different books from the series, you get a 5% discount on those two books.
            If you buy 3 different books, you get a 10% discount. With 4 different books, you get a 20% discount.
            If you go the whole hog, and buy all 5, you get a huge 25% discount.
            Note that if you buy, say, four books, of which 3 are different titles, you get a 10% discount on the 3 that form part of a set,
            but the fourth book still costs 8 EUR.
        </strong>
    </p>
</div>
<form action="" method="post">
    <?php
        $books = new BookHandler();
        $data = $books->getBooks();
    ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Cover</th>
            <th scope="col">Choose</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <?php
            echo "<td>" . $data[0]['title'] . "<br>" . "Price: 8€" . "</td>";
            echo "<td>" . $data[0]['year'] . "</td>";
            echo "<td>" . '<img src="pics/potter1.jpg" width="80" height="120">' . "</td>";
            echo "<td>" . "<select name='copiesPotter1'>"
                . "<option value='0'>0</option>" .
                "<option value='1'>1</option>" .
                "<option value='2'>2</option>" .
                "<option value='3'>3</option>" .
                "<option value='4'>4</option>" .
                "</td>";
            ?>
        </tr>
        <tr>
            <th scope="row">2</th>
            <?php
            echo "<td>" . $data[1]['title'] . "<br>" . "Price: 8€" . "</td>";
            echo "<td>" . $data[1]['year'] . "</td>";
            echo "<td>" . '<img src="pics/potter2.jpg" width="80" height="120">' . "</td>";
            echo "<td>" . "<select name='copiesPotter2'>"
                . "<option value='0'>0</option>" .
                "<option value='1'>1</option>" .
                "<option value='2'>2</option>" .
                "<option value='3'>3</option>" .
                "<option value='4'>4</option>" .
                "</td>";
            ?>
        </tr>
        <tr>
            <th scope="row">3</th>
            <?php
            echo "<td>" . $data[2]['title'] . "<br>" . "Price: 8€" . "</td>";
            echo "<td>" . $data[2]['year'] . "</td>";
            echo "<td>" . '<img src="pics/potter3.jpg" width="80" height="120">' . "</td>";
            echo "<td>" . "<select name='copiesPotter3'>"
                . "<option value='0'>0</option>" .
                "<option value='1'>1</option>" .
                "<option value='2'>2</option>" .
                "<option value='3'>3</option>" .
                "<option value='4'>4</option>" .
                "</td>";
            ?>
        </tr>
        <tr>
            <th scope="row">4</th>
            <?php
            echo "<td>" . $data[3]['title'] . "<br>" . "Price: 8€" . "</td>";
            echo "<td>" . $data[3]['year'] . "</td>";
            echo "<td>" . '<img src="pics/potter4.jpg" width="80" height="120">' . "</td>";
            echo "<td>" . "<select name='copiesPotter4'>"
                . "<option value='0'>0</option>" .
                "<option value='1'>1</option>" .
                "<option value='2'>2</option>" .
                "<option value='3'>3</option>" .
                "<option value='4'>4</option>" .
                "</td>";
            ?>
        </tr>
        <tr>
            <th scope="row">5</th>
            <?php
            echo "<td>" . $data[4]['title'] . "<br>" . "Price: 8€" . "</td>";
            echo "<td>" . $data[4]['year'] . "</td>";
            echo "<td>" . '<img src="pics/potter5.jpg" width="80" height="120">' . "</td>";
            echo "<td>" . "<select name='copiesPotter5'>"
                . "<option value='0'>0</option>" .
                "<option value='1'>1</option>" .
                "<option value='2'>2</option>" .
                "<option value='3'>3</option>" .
                "<option value='4'>4</option>" .
                "</td>";
            ?>
        </tr>
    </table>
    <?php
    echo "<hr>";
    echo "<div class='col-md4 text-center'>";
    echo "<button type='submit' style='margin: 2em' class='btn btn-primary' name='choose'>Choose selected books</button>";
    echo "</div>";
    ?>
    <?php
    if (isset($_POST['choose'])) {
        $display = new DisplaySelectedBooks();
        $display->displayBooks();
        $display->displayTotal();
    }
    ?>
</form>
</body>
</html>
