<?php

require "Triangulo.php";

class TrianguloTest extends \PHPUnit\Framework\TestCase {

    public function testValidarForma() {
        $objeto = new Triangulo();
        $objeto->a = 3;
        $objeto->b = 4;
        $objeto->c = 5;

        $this->assertEquals(true, $objeto->validarForma());
    }

}
