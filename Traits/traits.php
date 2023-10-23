<?php

trait Materials {
    public function getDetails() {
        return $this->material . $this->weight;
    }

    public function getDimension() {
        return $this->width .  $this->height . $this->depth . $this->weight;
    }

    public function getQuantity() {
        return $this->kilograms;
    }
}