<?php

require __DIR__ . '/../Traits/traits.php';

class Alimentation extends Commerce {
    public $kilograms;

    public function __construct($pet, $price, $product, $image, $kilograms)
    {
        parent::__construct($pet, $price, $product, $image, $kilograms);
        $this->kilograms = $kilograms;
    }

}