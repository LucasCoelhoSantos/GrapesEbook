<?php

namespace App\Controllers;

use App\Models\Usuario;
use PDOException;

// Classe responsável pela gestão das atividades relacionadas ao usuário. Principalmente ao login e cadastro.
class LoginController extends Controller {

    /**
     * @var Usuario Variável que indica se um usuário está logado.
     */
    private $loggedUser;

    /**
     *  Método construtor da classe.
     *  Ao ser instanciado, inicia a seção e verifica se já existe um usuário logado.
     */
    function __construct() {
        session_start();
        if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
    }

    /**
     *  Função que renderiza a página (visão) de login.
     *  Se estiver logado, redireciona para a página do usuário.
     */
    public function loginIndex(): void {
        if (!$this->loggedUser) {
            $this->view('users/login');
        }
        /*else if ($this->adm = True) {
            $this->view('product/list');
        }*/
        else {
            header('Location: ' . BASEPATH . 'user/info');
        }
    }

    /**
     *  Função que trata de verificar a identididade de um usuário.
     *  Se correta, adiciona o usuário à seção para o mesmo não precise fazer novamente.
     */
    public function login(): void {
        $usuario = Usuario::buscarUsuario($_POST['email']);

        if ($usuario && $usuario->igual($_POST['email'], $_POST['senha'])) {
            $_SESSION['user'] = $this->loggedUser = $usuario;
            header('Location:'  . BASEPATH . 'user/info');
        }
        else {
            header('Location: ' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
        }
    }

    // Função que renderiza a página (visão) de cadastro
    public function cadastrarUsuarioIndex(): void {
        $this->view('users/cadastrar');
    }

    /**
     *  Função que trata de cadastrar um novo usuário na base de dados (atualmente na sessão).
     *  Verifica se o email já está cadastrado, se sim, informa o usuário.
     */
    public function cadastrarUsuario(): void {
        try {
            $user = new Usuario($_POST['email'], $_POST['senha'], $_POST['nome']);
            $user->salvar();
            header('Location: ' . BASEPATH . 'login?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
        }
        catch (\Throwable $th) {
            header('Location: ' . BASEPATH . 'register?email=' . $_POST['email'] . '&mensagem=Email já cadastrado!');
        }
    }

    // Função responsável por renderizar as informações do usuário (se estiver logado).
    public function info(): void {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login?acao=entrar&mensagem=Você precisa se identificar primeiro');
            return;
        }
        $this->view('users/info', $this->loggedUser);
    }

    // Função que remove o usuário da seção (deslogar)
    public function sair(): void {
        if (!$this->loggedUser) {
            header('Location: ' . BASEPATH . 'login?mensagem=Você precisa se identificar primeiro');
            return;
        }
        unset($_SESSION['user']);
        header('Location: ' . BASEPATH . 'login?mensagem=Usuário deslogado com sucesso!');
    }

    // Função que lista os usuários da plataforma
    public function listar(): void {
        $usuarios = Usuario::buscarTodos();
        $usuarios = array_filter($usuarios, fn ($usuario) => $usuario->email != "suporte@login.com");
        $this->view('users/listar', $usuarios);
    }

    // Função que deleta usuários da plataforma
    public function deletar() {
        $usuario = Usuario::buscarUsuario($_POST['email']);

        try {
            $usuario->deletar();
            header('Location: ' . BASEPATH . 'user/list?mensagem=Usuário deletado com sucesso!');
        } catch (PDOException $erro) {
            header('Location: ' . BASEPATH . 'user/list?mensagem=Erro ao deletar ' . $_GET["email"] . ' !');
        }
    }
}

?>