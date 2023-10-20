<?php

class Kennel extends Commerce {
    public $width;
    public $height;
    public $depth;
    public $weight;

    public function __construct($pet, $price, $product, $width, $height, $depth, $weight) {
        parent::__construct($pet, $price, $product);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->weight = $weight;
    }

    public function getDimension() {
        return $this->width .  $this->height . $this->depth . $this->weight;
    }
} 