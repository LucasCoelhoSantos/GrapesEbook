<?php

namespace App\Models;

use App\Database;

// Classe reponsável por representar os dados de um produto na aplicação
class Produto {
    /**
     * @var integer Id do produto
     */
    private $id;

    /**
     * @var string Nome do produto
     */
    private $nome;

    /**
     * @var string Descrição do produto
     */
    private $descricao;

    /**
     * @var float Preço do produto
     */
    private $preco;

    // Contrutor da classe, responsável por inicializar os dados.
    function __construct(int $id, string $nome, string $descricao, float $preco) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    // Método get genérico para todos os campos
    public function __get($campo) {
        return $this->$campo;
    }

    // Método set genérico para todos os campos
    public function __set($campo, $valor) {
        return $this->$campo = $valor;
    }

    /**
     *  Função que auxilia na verificação da identidade fornecida.
     *  Para isso, os dados providos são comparados com a instância atual.
     */
    public function igual(int $id, string $nome): bool {
        return $this->id === $id && $this->nome === $nome;
    }

    // Função que salva os dados do produto no banco de dados
    public function salvar(): void {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO Produtos (nome, descricao, preco) VALUES (:nome, :descricao, :preco)');
        $stm->bindValue(':nome', $this->nome);
        $stm->bindValue(':descricao', $this->descricao);
        $stm->bindValue(':preco', $this->preco);
        $stm->execute();
    }

    /**
     * Função que busca por um produto a partir do nome fornecido e caso não exista, retorna NULL.
     */ 
    static public function buscarProduto($nome): Produto {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT id, nome, descricao, preco FROM Produtos WHERE nome = :nome');
        $stm->bindParam(':nome', $nome);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $produto = new Produto($resultado['id'], $resultado['nome'], $resultado['descricao'], $resultado['preco']);
            /*$produto->id = $resultado['id'];*/
            return $produto;
        }
        else {
            return NULL;
        }
    }

    /**
     * Função que retorna todos os produtos cadastrados.
     * @return Produto[]
     */
    static public function buscarTodos(): array {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT id, nome, descricao, preco FROM Produtos');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $produto = new Produto($resultado['id'], $resultado['nome'], $resultado['descricao'], $resultado['preco']);
            /*$produto->id = $resultado['id'];*/
            array_push($resultados, $produto);
        }
        return $resultados;
    }

    // Função que deleta um produto no banco.
    public function deletar() {
        $con = Database::getConnection();
        $stm = $con->prepare('DELETE FROM Produtos WHERE nome = :nome');
        $stm->bindValue(':nome', $this->nome);
        $stm->execute();
    }
}

?>