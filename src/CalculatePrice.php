<?php


namespace App;
use App\BookHandler;

class CalculatePrice
{
    protected $totalPrice;
    protected $totalPriceWithDiscount;

    protected $priceOfOneBook = 8;

    public function calculatePriceOfSelectedBooks()
    {
        $bookhandler = new BookHandler();
        $selectedBooks = $bookhandler->getSelectedBooks();



    }
}