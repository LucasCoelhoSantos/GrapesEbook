<?php

namespace App\Controllers;

use App\Modelos\Produto;
use PDOException;

/**
 * TO DO - Se o usuário for suporte@login.com, permitir que este cadastre, altere e exclua produtos.
 */
class ProdutoController extends Controller {

    /**
     *  Função que trata de cadastrar um novo produto na base de dados (atualmente na sessão).
     *  Verifica se o nome já está cadastrado, se sim, informa o usuário.
     */
    public function cadastrarProduto(): void {
        try {
            $product = new Produto($_POST['nome'], $_POST['descricao'], $_POST['preco']);
            $product->salvar();
            header('Location: ' . BASEPATH . 'product?nome=' . $_POST['nome'] . '&mensagem=Produto cadastrado com sucesso!');
        }
        catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'register?product=' . $_POST['nome'] . '&mensagem=Nome de produto já cadastrado!');
        }
    }
}

?>