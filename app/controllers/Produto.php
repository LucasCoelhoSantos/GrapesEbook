<?php

namespace App\Controllers;

use App\Models\Produto;
use PDOException;

// Classe responsável pela gestão das atividades relacionadas ao produto. Principalmente ao cadastro e exclusão.
class ProdutoController extends Controller {

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
            $product = new Produto($_POST['nome'], $_POST['autor'], $_POST['genero'], $_POST['imagem'], $_POST['descricao'], $_POST['preco']);
            $product->salvar();
            header('Location: ' . BASEPATH . 'user/info?nome=' . $_POST['nome'] . '&mensagem=Produto cadastrado com sucesso!');
        }
        catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'product/register?nome=' . $_POST['nome'] . '&mensagem=Nome do produto já cadastrado!');
        }
    }

    // Função que lista todos os produtos da plataforma
    public function listarProdutos(): void {
        $products = Produto::buscarTodosProdutos();
        $this->view('product/list', $products);
    }

    // Função que renderiza a página (visão) de pesquisa de um produto com base no nome ou gênero.
    public function searchProduct(): void {
        if (isset($_GET["nome"])) {
            $products = Produto::buscarProdutoNome($_GET["nome"]);
            $this->view('product/search', $products);
        }
        else if (isset($_GET["genero"])) {
            $products = Produto::buscarProdutoGenero($_GET["genero"]);
            $this->view('product/search', $products);
        }              
    }

    // Função responsável por renderizar as informações do produto.
    public function detailProduct(): void {
        $product = Produto::buscarProduto($_GET["nome"]);
        $this->view('product/detail', $product);
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