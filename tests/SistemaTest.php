<?php 

use PHPUnit\Framework\TestCase;
use Src\Sistema;

class SistemaTest extends TestCase
{
    public function testLogin()
    {
        $sistema = new Sistema();

        // Teste de login com credenciais corretas
        $sistema->login("admin", "1234");
        $this->assertTrue($sistema->logado, "Erro: O usuário não foi logado com as credenciais corretas.");

        
    }

    public function testLogout()
    {
        $sistema = new Sistema();
        $sistema->login("admin", "1234"); // Faz login

        $this->assertTrue($sistema->logado,"Erro: O usuário não está logado após o login.");

        $sistema->logout();

        $this->assertFalse($sistema->logado, "Erro: O usuário não foi desconectado.");
    }
}
