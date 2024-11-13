<?php
require_once __DIR__ . '/src/Pessoa.php';
require_once __DIR__ . '/src/Sistema.php';
require_once __DIR__ . '/src/ImcCalculator.php';
require_once __DIR__ . '/src/PessoaRepository.php';

use Src\Pessoa;
use Src\ImcCalculator;
use Src\PessoaRepository;
use Src\Sistema;

$repository = new PessoaRepository();
$imcCalculator = new ImcCalculator();

echo "Bem-vindo ao Sistema de Cadastro e Cálculo de IMC\n";


function cadastrarPessoa($repository, $imcCalculator) {
    do {
        echo "Informe o nome: ";
        $nome = trim(fgets(STDIN));
        if (empty($nome)) {
            echo "O nome é obrigatório!\n";
        }
    } while (empty($nome));
    
    do {
        echo "Informe a idade: ";
        $idade = (int) trim(fgets(STDIN));
        if ($idade <= 0) {
            echo "A idade é obrigatória e deve ser um número positivo!\n";
        }
    } while ($idade <= 0);
    
    do {
        echo "Informe o peso (kg): ";
        $peso = (float) trim(fgets(STDIN));
        if ($peso <= 0) {
            echo "O peso é obrigatório e deve ser um número positivo!\n";
        }
    } while ($peso <= 0);
    
    do {
        echo "Informe a altura (m): ";
        $altura = (float) trim(fgets(STDIN));
        if ($altura <= 0) {
            echo "A altura é obrigatória e deve ser um número positivo!\n";
        }
    } while ($altura <= 0);

    echo "Informe o email: ";
    $email = trim(fgets(STDIN));
    
    echo "Informe o telefone: ";
    $telefone = trim(fgets(STDIN));

    $pessoa = new Pessoa($nome, $email, $telefone, $idade, $peso, $altura);
    $imc = $imcCalculator->calcularIMC($peso, $altura);
    $pessoa->setImc($imc);
  

    if ($imcCalculator->verificarAlerta($imc)) {
        $pessoa->setAlertaGerado(true);
        $alerta = $imcCalculator->verificarAlertaIMC($imc);
        echo "\nIMC:     $alerta\n";
        echo "\nAlerta: IMC fora do intervalo saudável!\n";
    }
 
    

    $repository->adicionarPessoa($pessoa);
    echo "Pessoa cadastrada com sucesso!\n";
}
while (true) {
    $sistema = new Sistema();
    echo "Informe o usuário e senha para acessar o sistema:\n";
    $admin = trim(fgets(STDIN));
    echo "Senha: ";
    $senha = trim(fgets(STDIN));
    $sistema->login($admin, $senha);
    if ($sistema->logado) {
        break;
    } else {
        echo "Usuário ou senha incorretos. Tente novamente.\n";
    }
}

while (true) {
    echo "\nEscolha uma opção:\n";
    echo "1 - Cadastrar nova pessoa\n";
    echo "2 - Listar pessoas cadastradas\n";
    echo "3 - Sair(logout)\n";
    $opcao = trim(fgets(STDIN));

    if ($opcao == 1) {
        cadastrarPessoa($repository, $imcCalculator);
    } elseif ($opcao == 2) {
        $pessoas = $repository->listarPessoas();
        foreach ($pessoas as $pessoa) {
            echo $pessoa;
        }
    } elseif ($opcao == 3) {
        $sistema->logout();
        break;
    } else {
        echo "Opção inválida!\n";
    }
}
