<?php

class Toys extends Commerce {
    
    public $material;
    public $weight;
    
    public function __construct($pet, $price, $product, $material, $weight) {
        parent::__construct($pet, $price, $product);
        $this->material = $material;
        $this->weight = $weight;
    }

    public function getDetails() {
        return $this->material . $this->weight;
    }
}