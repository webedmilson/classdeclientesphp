
<?php

class Cliente {
    // Propriedades
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;

    // Construtor
    public function __construct($id, $nome, $email, $telefone, $endereco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
    }

    // Métodos getters
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    // Métodos setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    // Método para exibir informações do cliente
    public function exibirDados() {
        echo "ID: {$this->id}" . PHP_EOL;
        echo "Nome: {$this->nome}" . PHP_EOL;
        echo "Email: {$this->email}" . PHP_EOL;
        echo "Telefone: {$this->telefone}" . PHP_EOL;
        echo "Endereço: {$this->endereco}" . PHP_EOL;
    }
}

// Exemplo de uso
$cliente = new Cliente(1, "João da Silva", "joao@email.com", "(11) 99999-9999", "Rua das Flores, 123");
$cliente->exibirDados();

$cliente->setTelefone("(11) 88888-8888");
echo PHP_EOL . "Após atualização do telefone:" . PHP_EOL;
$cliente->exibirDados();
?>
