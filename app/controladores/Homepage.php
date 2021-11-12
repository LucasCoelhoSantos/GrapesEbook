<?php

namespace App\Controladores;

use App\Modelos\Usuario;
use App\Modelos\Produto;
use PDOException;

// Classe responsável pela gestão das atividades relacionadas a homepage. Principalmente ???.
class HomepageController extends Controller {
    
    /**
     * @var Usuario Variável que indica se um usuário está logado.
     */
    private $loggedUser;

    /**
     *  Método construtor da classe.
     *  Ao ser instanciado, inicia a seção e verifica se já existe um usuário logado.
     */
    function __construct() {
        /*
        session_start();
        if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
        */
    }

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
}
?>