# Relatório de Teste - Sistema de Cadastro e Cálculo de IMC

**Data:** 13/11/2024  
**Versão:** 1.0  
**Descrição:** Relatório de teste para o Sistema de Cadastro e Cálculo de IMC.  
**Autor(es):** Equipe de Testes

## Etapas e Fluxos de Eventos

### Caso de Uso: Sistema de Cadastro e Cálculo de IMC

#### Fluxo básico:

- **FB1** - O usuário abre o terminal.
- **FB2** - O usuário realiza o login no sistema.
- **FB3** - O usuário clica na opção para cadastrar uma nova pessoa.
- **FB4** - O usuário informa os dados de uma nova pessoa (nome, idade, peso, altura, email, telefone).
- **FB5** - O sistema calcula o IMC e verifica se há alerta de IMC fora do intervalo saudável.
- **FB6** - O usuário salva os dados da pessoa no sistema.
- **FB7** - O usuário pode listar as pessoas cadastradas.

#### Fluxo alternativo 1: Cadastro de nova pessoa com alerta IMC

- **FA1.1** - O usuário abre o terminal.
- **FA1.2** - O usuário realiza o login.
- **FA1.3** - O usuário clica na opção para cadastrar uma nova pessoa.
- **FA1.4** - O sistema calcula o IMC e verifica se há alerta de IMC fora do intervalo saudável.
- **FA1.5** - O alerta é gerado, informando ao usuário sobre o IMC fora do intervalo saudável.

#### Fluxo alternativo 2: Listagem de pessoas cadastradas

- **FA2.1** - O usuário abre o terminal.
- **FA2.2** - O usuário realiza o login.
- **FA2.3** - O usuário clica na opção para listar as pessoas cadastradas.
- **FA2.4** - O sistema exibe uma lista de todas as pessoas cadastradas com seus dados e IMC calculado.

## 1a Etapa - Levantamento dos fluxos de eventos

Os fluxos de eventos para o caso de uso do sistema estão descritos acima, incluindo os fluxos básicos e alternativos, bem como o fluxo de exceção.

## 2a Etapa - Definição dos cenários de teste

### CENÁRIO | FLUXO

- **Cenário 1** | FB1 - FB6 -FA1.1 - FA1.5
- **Cenário 2** |**Cenário 2** | FA2.1 - FA2.4





## 3a Etapa - Definição da tabela de casos de teste

## 

| **Cenário**   | **Caso de Teste**                | **Entradas**                       | **Resultados Esperados**                                     |
| ------------- | -------------------------------- | ---------------------------------- | ------------------------------------------------------------ |
| **Cenário 1** | CT1 - Entrar no sistema          | Usuário e senha                    | Exibir tela com campos para informar dados do usuário. Exibir tela principal após login. |
|               | CT2 - Ver tela de cadastro       | Selecionar "Cadastrar nova pessoa" | Exibir tela para inserir dados de pessoa.                    |
|               | CT3 - Cadastrar pessoa           | Dados válidos para pessoa          | Exibir confirmação de cadastro com sucesso.                  |
|               | CT4 - Visualizar IMC             | Exibir IMC calculado               | Exibir alerta caso IMC esteja fora do intervalo saudável.    |
| **Cenário 2** | CT5 - Listar pessoas cadastradas | Selecionar "Listar pessoas"        | Exibir lista com todas as pessoas cadastradas e seus IMC.    |

### Detalhamento dos Casos de Teste:

#### Cenário 1

- **CT1 - Entrar no sistema**
  - **Entradas**: Usuário e senha
  - **Resultados Esperados**: Exibir opções com campos para informar dados do usuário. Após login, exibir tela principal do sistema.

- **CT2 - Ver opção de cadastro**
  - **Entradas**: Selecionar a opção "Cadastrar nova pessoa" no menu.
  - **Resultados Esperados**: Exibir opções para inserir os dados de uma nova pessoa.

- **CT3 - Cadastrar pessoa**
  - **Entradas**: Dados válidos para pessoa (nome, idade, peso, altura, email, telefone).
  - **Resultados Esperados**: Exibir uma mensagem de sucesso indicando que a pessoa foi cadastrada corretamente.

- **CT4 - Visualizar IMC**
  - **Entradas**: Sistema calcula o IMC após o cadastro de uma pessoa.
  - **Resultados Esperados**: Se o IMC estiver fora do intervalo saudável, exibir alerta indicando o problema.



#### Cenário 2

- **CT5 - Listar pessoas cadastradas**
  - **Entradas**: Selecionar a opção "Listar pessoas" no menu.
  - **Resultados Esperados**: Exibir a lista de todas as pessoas cadastradas com seus dados e IMC calculado.


---

**Conclusão:** Este relatório documenta os fluxos de eventos, cenários e casos de teste do Sistema de Cadastro e Cálculo de IMC. A execução dos testes permitirá validar o correto funcionamento do sistema, tanto em cenários normais quanto em cenários excepcionais.