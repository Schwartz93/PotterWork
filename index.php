<?php
require "vendor/autoload.php";

use App\BookHandler;

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
    <title>Harry Potter</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <h2>Today: Harry Potter Deal!</h2>
    <h3>Scroll down for more information</h3>
    <form action="" method="post">
        <button type="submit" class="btn btn-primary" name="search" value="Search Books">Search for books</button>
    </form>
</nav>
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
            echo "<td>" . '<img src="pics/potter1.jpg" width="100" height="150">' . "</td>";
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
            echo "<td>" . '<img src="pics/potter2.jpg" width="100" height="150">' . "</td>";
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
            echo "<td>" . '<img src="pics/potter3.jpg" width="100" height="150">' . "</td>";
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
            echo "<td>" . '<img src="pics/potter4.jpg" width="100" height="150">' . "</td>";
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
            echo "<td>" . '<img src="pics/potter5.jpg" width="100" height="150">' . "</td>";
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
        echo "<button type='submit' class='btn btn-primary' name='choose'>Choose selected books</button>";
        echo "<h3>Selected Items:</h3>";
    ?>
    <?php
    if (isset($_POST['choose'])) {
        $select = new BookHandler();
        $selected = $select->getSelectedBooks();
        var_dump($selected);
        } else {
        echo "You have no selected books!";
    }

    ?>
</form>
</body>
</html>
