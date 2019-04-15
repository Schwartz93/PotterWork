<?php
require "vendor/autoload.php";

use App\DbDisplay;

$books = new DbDisplay();
$books->displayBooks();