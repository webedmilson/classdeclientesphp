# Gestão de Clientes em PHP

Este projeto demonstra como implementar uma classe PHP para gerenciar dados de clientes, com funcionalidades básicas de criação, leitura e atualização. É uma aplicação simples e funcional para desenvolvedores que estão aprendendo a trabalhar com Orientação a Objetos em PHP.

## Funcionalidades

- Criação de objetos de cliente com os seguintes atributos:
  - **ID**
  - **Nome**
  - **E-mail**
  - **Telefone**
  - **Endereço**
- Métodos para:
  - **Exibição de dados do cliente**.
  - **Atualização dos dados do cliente**.
- Código limpo e comentado, facilitando a personalização e aprendizado.

## Estrutura do Código

O projeto consiste em:
- **Classe `Cliente`**: Implementa propriedades e métodos necessários para gerenciar os dados.
- **Exemplo de Uso**: Demonstra como instanciar objetos da classe, acessar e modificar informações.

## Exemplo de Código

```php
<?php
require 'Cliente.php';

$cliente = new Cliente(1, "João da Silva", "joao@email.com", "(11) 99999-9999", "Rua das Flores, 123");
$cliente->exibirDados();

$cliente->setTelefone("(11) 88888-8888");
echo PHP_EOL . "Após atualização do telefone:" . PHP_EOL;
$cliente->exibirDados();
?>
