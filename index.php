<?php
// Desabilita warnings
error_reporting(E_ALL ^ E_WARNING);

// Define o basepath globalmente
define('BASEPATH', '/progweb/GrapesEbook/');

include_once __DIR__ . '/app/Database.php';
include_once __DIR__ . '/app/controladores/Controlador.php';
include_once __DIR__ . '/app/controladores/Homepage.php';
include_once __DIR__ . '/app/controladores/Login.php';
include_once __DIR__ . '/app/modelos/Usuario.php';
include_once __DIR__ . '/libs/Route.php';

use App\Database;
use App\Controladores\LoginController;
use App\Controladores\HomepageController;
use Steampixel\Route;

// Cria o schema no banco de dados
Database::createSchema();

// Cria uma instância do controlador para uso
$controller1 = new HomepageController();
$controller2 = new LoginController();

// Parte responsável pelo direcionamento das requisições aos respectivos métodos do controlador.
Route::add('/homepage', fn () => $controller1->homepageIndex(), ['get']);
Route::add('/login', fn () => $controller2->loginIndex(), ['get']);
Route::add('/register', fn () => $controller2->cadastrarIndex(), ['get']);
Route::add('/user/info', fn () => $controller2->info(), ['get']);
Route::add('/user/list', fn () => $controller2->listar(), ['get']);

Route::add('/login', fn ()  => $controller2->login(), ['post']);
Route::add('/register', fn ()  => $controller2->cadastrar(), ['post']);
Route::add('/logout', fn () => $controller2->sair(), ['post']);
Route::add('/user/remove', fn ()  => $controller2->deletar(), ['post']);

// Rota auxiliar para redirecionar o usuário.
Route::add('/', function () {
    header('Location: ' . BASEPATH . 'homepage');
}, ['get']);

Route::add('/.*', function () {
    http_response_code(404);
    echo "Página não encontrada ou inexistente!";
}, ['get']);

// Inicia o router
Route::run(BASEPATH);
?>