<?php
namespace Src;

class Pessoa {
    private string $nome;
    private ?string $email;
    private ?string $telefone;
    private int $idade;
    private float $peso;
    private float $altura;
    private ?float $imc = null;
    private bool $alertaGerado = false;

    public function __construct($nome, $email, $telefone, $idade, $peso, $altura) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getImc() {
        return $this->imc;
    }

    public function getAlertaGerado() {
        return $this->alertaGerado;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setImc($imc) {
        $this->imc = $imc;
    }

    public function setAlertaGerado($status) {
        $this->alertaGerado = $status;
    }

    public function __toString() {
        return "Nome: $this->nome | IMC: $this->imc | Alerta: " . ($this->alertaGerado ? "Sim" : "Não") . "\n";
    }

   
}
