## Rodando o Sistema

1. **Execute o script principal**:

   Para rodar o sistema, basta executar o arquivo `index.php` diretamente no terminal. O script pedirá para você realizar o login e, após o login bem-sucedido, você poderá interagir com o menu do sistema.

   Execute o seguinte comando no terminal:

   ```bash
   php index.php

O sistema solicitará o nome de usuário e senha. Utilize as credenciais:

- Usuário: admin
- Senha: 1234

Após o login, você poderá escolher entre as opções:

- Cadastrar uma nova pessoa
- Listar pessoas cadastradas
- Sair (logout)


## Testes
Os testes automatizados para o sistema estão localizados na pasta tests. Para rodar os testes, você precisa ter o PHPUnit instalado. Se você ainda não tem o PHPUnit instalado, pode instalá-lo globalmente ou usar o PHPUnit fornecido pelo Composer.

Rodar os testes com PHPUnit:

Para rodar os testes, execute o seguinte comando:


   ```
   ./vendor/bin/phpunit --testdox

   ```


O PHPUnit irá procurar pelos arquivos de teste na pasta tests e executar todos os testes encontrados. O parâmetro --testdox gera uma saída mais legível com o nome dos testes que estão sendo executados.



