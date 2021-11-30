<?php

namespace App\Controllers;

use App\Models\Produto;
use PDOException;

// Classe responsável pela gestão das atividades relacionadas ao produto. Principalmente ao cadastro e exclusão.
class ProdutoController extends Controller {

    // Função que renderiza a página (visão) de pesquisa de um produto.
    public function searchProduct(): void {
        $products = Produto::buscarProdutoCom($_GET["nome"]);
        $this->view('product/search', $products);
    }

    // Função que renderiza a página (visão) de cadastro de um produto.
    public function cadastrarProdutoIndex(): void {
        $this->view('product/register');
    }

    /**
     *  Função que trata de cadastrar um novo produto na base de dados.
     *  Verifica se o nome do produto já está cadastrado, se sim, informa o usuário.
     */
    public function cadastrarProduto(): void {
        try {
            $product = new Produto($_POST['nome'], $_POST['autor'], $_POST['descricao'], $_POST['preco']);
            $product->salvar();
            header('Location: ' . BASEPATH . 'user/info?nome=' . $_POST['nome'] . '&mensagem=Produto cadastrado com sucesso!');
        }
        catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'product/register?nome=' . $_POST['nome'] . '&mensagem=Nome do produto já cadastrado!');
        }
    }

    // Função que lista todos os produtos da plataforma
    public function listarProdutos(): void {
        $products = Produto::buscarTodos();
        $this->view('product/list', $products);
    }

    /**
    * TO DO - Se o usuário for suporte@login.com, permitir o cadastro, alteração e exclusão de produtos.
    * if ($usuario => $usuario->email != "suporte@login.com"){
    *   $this->view('product/register');
    * };
    */

    public function deletarProduto() {
        $product = Produto::buscarProduto($_POST['nome']);

        try {
            $product->deletar();
            header('Location: ' . BASEPATH . 'product/list?mensagem=Produto deletado com sucesso!');
        } catch (PDOException $erro) {
            header('Location: ' . BASEPATH . 'product/list?mensagem=Erro ao deletar ' . $_GET["nome"] . ' !');
        }
    }
}

?>