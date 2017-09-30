<?php

# arquivo Triangulo.php
class Triangulo {

    # suas propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
    public function validarForma() {
        if ($this->a < ($this->b + $this->c)) {
            if ($this->b < ($this->a + $this->c)) {
                if ($this->c < ($this->a + $this->b)) {
                    return true;
                }
            }
        }
        return false;
    }
}

