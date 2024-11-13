<?php
use PHPUnit\Framework\TestCase;
use Src\ImcCalculator;

class ImcCalculatorTest extends TestCase
{
    public function testCalculoImc()
    {
        $calculator = new ImcCalculator();
        $imc = $calculator->calcularIMC(70, 1.75);
        $this->assertEquals(
        22.86, 
        round($imc, 2), 
        message: "Erro: O cálculo do IMC não corresponde ao esperado.");
    }

    public function testImcAlertaAbaixoDoPeso()
    {
        $calculator = new ImcCalculator();
        $imc = $calculator->calcularIMC(50, 1.75);
        $this->assertTrue($calculator->verificarAlerta($imc),
        "Erro: O IMC abaixo do peso esperado não gerou alerta.",
    );
    }

    public function testImcAlertaAcimaDoPeso()
    {
        $calculator = new ImcCalculator();
        $imc = $calculator->calcularIMC(90, 1.75);
        $this->assertTrue($calculator->verificarAlerta($imc), 
        "Erro: O IMC acima do peso esperado não gerou alerta.");
    }

    public function testImcSemAlerta()
    {
        $calculator = new ImcCalculator();
        
        $imc = $calculator->calcularIMC(70, 1.75);
        
        
        $this->assertFalse($calculator->verificarAlerta($imc), "Erro: O IMC dentro do peso saudável gerou um alerta indevido.");
        
    }
    

    public function testVerificarAlertaIMC() {
        $sistema = new ImcCalculator();
    
        // Teste de faixa do IMC
        $result = $sistema->verificarAlertaIMC(22.86);
        $this->assertEquals('Peso normal', $result);
    
        $result = $sistema->verificarAlertaIMC(17.0);
        $this->assertEquals('Abaixo do peso', $result);
    
        $result = $sistema->verificarAlertaIMC(27.0);
        $this->assertEquals('Sobrepeso', $result);
    
        $result = $sistema->verificarAlertaIMC(32.0);
        $this->assertEquals('Obesidade', $result);
    }
    
}
