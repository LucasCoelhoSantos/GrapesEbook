<?php

namespace App\Models;

use App\Database;

/**
 * Classe reponsável por representar os dados de um produto na aplicação
 */
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
     * @var string Autor do produto
     */
    private $autor;

    /**
     * @var string Descrição do produto
     */
    private $descricao;

    /**
     * @var float Preço do produto
     */
    private $preco;

    /**
     * @var integer Quantidade do produto
     */
    private $quantidade;

    // Contrutor da classe, responsável por inicializar os dados.
    function __construct(int $id, string $nome, string $autor, string $descricao, float $preco, int $quantidade) {
        $this->id = $id;
        $this->nome = $nome;
        $this->autor = $autor;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    // Método get genérico para todos os campos
    public function __get($campo) {
        return $this->$campo;
    }

    // Método set genérico para todos os campos
    public function __set($campo, $valor) {
        return $this->$campo = $valor;
    }

    // Função que salva os dados do produto no banco de dados
    public function salvar(): void {
        $con = Database::getConnection();

        $stm = $con->prepare('INSERT INTO Produtos (nome, autor, descricao, preco, quantidade) VALUES (:nome, :autor, :descricao, :preco, :quantidade)');
        $stm->bindValue(':nome', $this->nome);
        $stm->bindValue(':autor', $this->autor);
        $stm->bindValue(':descricao', $this->descricao);
        $stm->bindValue(':preco', $this->preco);
        $stm->bindValue(':quantidade', $this->quantidade);
        $stm->execute();
    }

    /**
     * Função que busca por um produto a partir do nome fornecido e caso não exista, retorna NULL.
     */ 
    static public function buscarProduto($nome): Produto {
        $con = Database::getConnection();
        $stm = $con->prepare('SELECT id, nome, autor, descricao, preco, quantidade FROM Produtos WHERE nome = :nome');
        $stm->bindParam(':nome', $nome);

        $stm->execute();
        $resultado = $stm->fetch();

        if ($resultado) {
            $produto = new Produto($resultado['id'], $resultado['nome'], $resultado ['autor'], $resultado['descricao'], $resultado['preco'], $resultado['quantidade']);
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
        $stm = $con->prepare('SELECT id, nome, autor, descricao, preco, quantidade FROM Produtos');
        $stm->execute();

        $resultados = [];

        while ($resultado = $stm->fetch()) {
            $produto = new Produto($resultado['id'], $resultado['autor'], $resultado['nome'], $resultado['descricao'], $resultado['preco'], $resultado['quantidade']);
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