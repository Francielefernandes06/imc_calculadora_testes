<?php
use PHPUnit\Framework\TestCase;
use Src\Pessoa;
use Src\PessoaRepository;

class PessoaRepositoryTest extends TestCase
{
    public function testAdicionarPessoa()
    {
        $repository = new PessoaRepository();
        $pessoa = new Pessoa("Maria", "maria@example.com", "987654321", 25, 60, 1.65);

        $repository->adicionarPessoa($pessoa);
        $pessoas = $repository->listarPessoas();

        $this->assertCount(1, $pessoas, "Erro: A quantidade de pessoas cadastradas não corresponde ao esperado.");
        $this->assertEquals("Maria", $pessoas[0]->getNome(), "Erro: O nome da pessoa não corresponde ao esperado.");
    }

    public function testListarPessoasVazia()
    {
        $repository = new PessoaRepository();
        $pessoas = $repository->listarPessoas();
        $this->assertEmpty($pessoas, "Erro: A lista de pessoas cadastradas não está vazia.");
    }

    public function testListarPessoasComCadastro()
{
    $repository = new PessoaRepository();
    
    $pessoa1 = new Pessoa("Maria", "maria@example.com", "987654321", 25, 60, 1.65);
    $pessoa2 = new Pessoa("João", "joao@example.com", "912345678", 30, 75, 1.80);
    
    $repository->adicionarPessoa($pessoa1);
    $repository->adicionarPessoa($pessoa2);

    $pessoas = $repository->listarPessoas();
    
    $this->assertCount(2, $pessoas, "Erro: A quantidade de pessoas cadastradas não corresponde ao esperado.");
    
    $this->assertEquals("Maria", $pessoas[0]->getNome(), "Erro: O nome da primeira pessoa não corresponde ao esperado.");
    $this->assertEquals("João", $pessoas[1]->getNome(), "Erro: O nome da segunda pessoa não corresponde ao esperado.");
}

}
