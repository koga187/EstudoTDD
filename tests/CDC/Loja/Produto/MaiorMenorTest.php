<?php

namespace CDC\Loja\Produto;

require "./vendor/autoload.php";

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use PhpUnit_Framework_TestCase as PhpUnit;

class MaiorEMenorTest extends Phpunit
{
    public function testOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto("Geladeira", 450.00));
        $carrinho->adiciona(new Produto("Liquidificador", 250.00));
        $carrinho->adiciona(new Produto("Jogo de pratos", 70.00));

        $maiorMenor = new MaiorEMenor();

        $maiorMenor->encontra($carrinho);
        $this->assertEquals("Jogo de pratos", $maiorMenor->getMenor()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
    }

    public function testApenasUmproduto()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto("Geladeira", 450.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        $this->assertEquals("Geladeira", $maiorMenor->getMaior()->getNome());
        $this->assertEquals("Geladeira", $maiorMenor->getMenor()->getNome());
    }
}