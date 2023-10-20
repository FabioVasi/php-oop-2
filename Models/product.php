<?php

class Commerce {
    public $name;
    public $price;
    public $pet;
    public function __construct($name, $price, $pet) {
        $this->name = $name;
        $this->price = $price;
        $this->pet = $pet;
    }
}

var_dump($name, $price, $pet);