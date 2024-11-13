<?php
namespace Src;

class PessoaRepository {
    private array $pessoas = [];

    public function adicionarPessoa($pessoa) {
        $this->pessoas[] = $pessoa;
    }

    public function listarPessoas() {
        return $this->pessoas;
    }
}
