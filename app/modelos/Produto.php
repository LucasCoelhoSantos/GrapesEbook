<?php

namespace App\Modelos;

use App\Database;

// Classe reponsável por representar os dados de um produto na aplicação
class Produto {
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
}

?>