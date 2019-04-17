<?php

namespace App;

class CalculatePrice
{

    protected $totalPrice;
    protected $singlePrice = 8;

    public function calculateSelectedBookprice()
    {

        $select = new BookHandler();

        $selectedPotter1 = $select->getCopiesBook1();
        $selectedPotter2 = $select->getCopiesBook2();
        $selectedPotter3 = $select->getCopiesBook3();
        $selectedPotter4 = $select->getCopiesBook4();
        $selectedPotter5 = $select->getCopiesBook5();

        var_dump($selectedPotter1);

        if ($selectedPotter1 === 1) {
            echo "Potter = 1";
        }

        if ($selectedPotter1 === 1 && $selectedPotter2 === 0 && $selectedPotter3 === 0 && $selectedPotter4 === 0 && $selectedPotter5 === 0) {
            $this->totalPrice = $this->singlePrice * 0.95;
        } elseif ($selectedPotter1 === 0 && $selectedPotter2 === 1 && $selectedPotter3 === 0 && $selectedPotter4 === 0 && $selectedPotter5 === 0) {
            $this->totalPrice = $this->singlePrice * 0.95;
        } elseif ($selectedPotter1 === 0 && $selectedPotter2 === 0 && $selectedPotter3 === 1 && $selectedPotter4 === 0 && $selectedPotter5 === 0) {
            $this->totalPrice = $this->singlePrice * 0.95;
        } elseif ($selectedPotter1 === 0 && $selectedPotter2 === 0 && $selectedPotter3 === 0 && $selectedPotter4 === 1 && $selectedPotter5 === 0) {
            $this->totalPrice = $this->singlePrice * 0.95;
        } elseif ($selectedPotter1 === 0 && $selectedPotter2 === 0 && $selectedPotter3 === 0 && $selectedPotter4 === 0 && $selectedPotter5 === 1) {
            $this->totalPrice = $this->singlePrice * 0.95;
        }

        return $this->totalPrice;
    }
}