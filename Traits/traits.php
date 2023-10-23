<?php

trait Materials {
    public function getDetails() {
        return $this->material . $this->weight;
    }

}