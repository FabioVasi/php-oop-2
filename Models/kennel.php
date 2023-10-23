<?php

require __DIR__ . '/../Traits/traits.php';

class Kennel extends Commerce {
    public $width;
    public $height;
    public $depth;
    public $weight;

    public function __construct($pet, $price, $product, $image, $width, $height, $depth, $weight) {
        parent::__construct($pet, $price, $product, $image);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->weight = $weight;
    }

} 