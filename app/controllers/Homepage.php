<?php

namespace App\Controllers;

use App\Models\Usuario;
use App\Models\Produto;
use PDOException;

// Classe responsável pela gestão das atividades relacionadas a homepage.
class HomepageController extends Controller {
    
    /**
     * @var Usuario Variável que indica se um usuário está logado.
     */
    private $loggedUser;

    /**
     *  Função que renderiza a página (visão) da homepage.
     *  Se estiver logado, redireciona para a página do usuário.
     */
    public function homepageIndex(): void {
        if (!$this->loggedUser) {
            $this->view('users/homepage');
        }
        else {
            header('Location: ' . BASEPATH . 'user/login');
        }
    }

    // Função que renderiza a página (visão) de cadastro
    public function cadastrarProdutoIndex(): void {
        $this->view('users/cadastrarProduto');
    }

    /**
     *  Função que trata de cadastrar um novo produto na base de dados (atualmente na sessão).
     *  Verifica se o nome já está cadastrado, se sim, informa o usuário.
     */
    public function cadastrarProduto(): void {
        try {
            $product = new Produto($_POST['nome'], $_POST['descricao'], $_POST['preco']);
            $product->salvar();
            header('Location: ' . BASEPATH . 'cadastro?nome=' . $_POST['nome'] . '&mensagem=Produto cadastrado com sucesso!');
        }
        catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'cadastro?nome=' . $_POST['nome'] . '&mensagem=Nome de produto já cadastrado!');
        }
    }
}

?>