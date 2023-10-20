<?php

class Commerce {
    public $pet;
    public $price;
    public $product;

    public function __construct($pet, $price, $product) {
        $this->pet = $pet;
        $this->price = $price;
        $this->product = $product;
    }
}