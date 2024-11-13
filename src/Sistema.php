<?php 
namespace Src;

class Sistema {
    private $pessoas = [];
    public $logado = false;

    public function lerEntrada() {
        return trim(fgets(STDIN));
    }

    public function login($usuario, $senha) {
        $usuarioMock = "admin";
        $senhaMock = "1234";
        
        if ($usuario === $usuarioMock && $senha === $senhaMock) {
            echo "Login bem-sucedido!\n";
            $this->logado = true;
        } else {
            echo "Usuário ou senha incorretos. Tente novamente.\n";
        }
    }

    public function logout() {
        if ($this->logado) {
            echo "Você foi desconectado com sucesso.\n";
            $this->logado = false;
        } else {
            echo "Você não está logado.\n";
        }
    }
}
