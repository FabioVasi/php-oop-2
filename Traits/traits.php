<?php

trait Materials {
    public function getDetails() {
        try {
            // logica di codice 
            if ($this->material != '' && $this->weight != '') {
                $result = $this->material . $this->weight;

                return $result;
            } else {
                throw new Exception('Material e weight assenti', 2023);
            }
        } catch (Exception $exception) {
            // invio di email agli amministratori 
            if (DEBUG) {
                var_dump($exception->getMessage());
                var_dump($exception->getCode());
                var_dump($exception->getTrace());
            }

            exit('Error: Ci scusiamo per il disagio');
        }
    }

}