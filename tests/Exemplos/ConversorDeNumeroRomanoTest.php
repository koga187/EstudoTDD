<?php
/**
 * Created by PhpStorm.
 * User: koga
 * Date: 22/09/15
 * Time: 20:58
 */

namespace CDC\Exemplos;

require "./vendor/autoload.php";

use PHPUnit_Framework_TestCase as PhpUnit;

class ConversorDeNumeroRomanoTest extends PHPUnit
{
    public function testeDeveEntenderSimboloI()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero);
    }

    public function testeDeveEntenderSimboloV()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converte("V");
        $this->assertEquals(5, $numero);
    }

    public function testeDeveEntenderSimboloII()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converte("II");
        $this->assertEquals(2, $numero);
    }

    public function testeDeveEntenderSimboloXXII()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converte("XXII");
        $this->assertEquals(22, $numero);
    }

    public function testeDeveEntenderSimboloIX()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converte("IX");
        $this->assertEquals(9, $numero);
    }

    public function testeDeveEntenderSimboloXXIV()
    {
        $romano = new ConversorDeNumerosRomanos();
        $numero = $romano->converte("XXIV");
        $this->assertEquals(24, $numero);
    }


}
