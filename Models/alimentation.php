<?php

class Alimentation extends Commerce {
    public $kilograms;

    public function __construct($pet, $price, $product, $kilograms)
    {
        parent::__construct($pet, $price, $product, $kilograms);
        $this->kilograms = $kilograms;
    }

    public function getQuantity() {
        return $this->kilograms;
    }
}