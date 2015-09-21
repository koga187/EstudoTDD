<?php

namespace CDC\Loja\Produto;

require "./vendor/autoload.php";

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\Produto;
use CDC\Loja\Produto\MaiorMenor;
use \PhpUnit_Framework_TestCase as PhpUnit;

class MaiorMenorTest extends Phpunit
{
    function testOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto("Geladeira", 450.00));
        $carrinho->adiciona(new Produto("Liquidificador", 250.00));
        $carrinho->adiciona(new Produto("Jogo de pratos", 70.00));

        $maiorMenor = new MaiorMenor();

        $maiorMenor->encontra($carrinho);
        $this->assertEquals("Jogo de pratos", $maiorMenor->getMenor()->getNome());
    }
}