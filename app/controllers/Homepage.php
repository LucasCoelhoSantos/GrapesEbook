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

    // Função que renderiza a página (visão) da homepage.
    public function homepageIndex(): void {
        $this->view('users/homepage');
    }

    // Função que renderiza a página (visão) da homepage.
    public function pageNotFound(): void {
        $this->view('layout/pageNotFound');
    }
}

?>