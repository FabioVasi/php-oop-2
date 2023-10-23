<?php

require __DIR__ . '/../Traits/traits.php';

class Toys extends Commerce {
    
    public $material;
    public $weight;
    
    public function __construct($pet, $price, $product, $image, $material, $weight) {
        parent::__construct($pet, $price, $product, $image);
        $this->material = $material;
        $this->weight = $weight;
    }

}