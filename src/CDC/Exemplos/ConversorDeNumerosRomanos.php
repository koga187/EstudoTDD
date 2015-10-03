<?php
/**
 * Created by PhpStorm.
 * User: koga
 * Date: 22/09/15
 * Time: 21:01
 */

namespace CDC\Exemplos;


class ConversorDeNumerosRomanos
{
    protected $tabela = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
        );

    public function converte($romano)
    {
        $acumulador = 0;
        $ultimoVizinhoDaDireita = 0;
        for ($i = strlen($romano) - 1; $i >= 0; $i--) {

            $atual = 0;
            $numCorrente = $romano[$i];
            if(array_key_exists($numCorrente, $this->tabela)) {
                $atual = $this->tabela[$numCorrente];
            }

            $multiplicador = 1;
            if($atual < $ultimoVizinhoDaDireita) {
                $multiplicador = -1;
            }

            $acumulador += ($atual * $multiplicador);

            $ultimoVizinhoDaDireita = $atual;
        }
    }
}
