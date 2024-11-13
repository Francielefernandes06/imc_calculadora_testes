<?php
use PHPUnit\Framework\TestCase;
use Src\Pessoa;

class PessoaTest extends TestCase
{
    public function testCriacaoPessoa()
    {
        $pessoa = new Pessoa("João", "joao@example.com", "123456789", 30, 70, 1.75);
        $this->assertEquals("João", $pessoa->getNome(), "Erro: O nome da pessoa não corresponde ao esperado.");
        $this->assertEquals("joao@example.com", $pessoa->getEmail(), "Erro: O email da pessoa não corresponde ao esperado.");
        $this->assertEquals(30, $pessoa->getIdade(), "Erro: A idade da pessoa não corresponde ao esperado.");
        $this->assertEquals(70, $pessoa->getPeso(), "Erro: O peso da pessoa não corresponde ao esperado.");
        $this->assertEquals(1.75, $pessoa->getAltura(), "Erro: A altura da pessoa não corresponde ao esperado.");
    }

    public function testAtualizarImc()
    {
        $pessoa = new Pessoa("João", "joao@example.com", "123456789", 30, 70, 1.75);
        $pessoa->setImc(22.86);
        $this->assertEquals(22.86, $pessoa->getImc(), "Erro: O IMC da pessoa não corresponde ao esperado.");
    }

    public function testAtualizarAlerta()
    {
        $pessoa = new Pessoa("João", "joao@example.com", "123456789", 30, 70, 1.75);
        $pessoa->setAlertaGerado(true);
        $this->assertTrue($pessoa->getAlertaGerado(), "Erro: O alerta gerado pela pessoa não corresponde ao esperado.");
    }
}
