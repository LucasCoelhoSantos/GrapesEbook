<?php
// Desabilita warnings
error_reporting(E_ALL ^ E_WARNING);

// Define o basepath globalmente
define('BASEPATH', '/progweb/GrapesEbook/');

include_once __DIR__ . '/app/Database.php';
include_once __DIR__ . '/libs/Route.php';

include_once __DIR__ . '/app/controllers/Controlador.php';
include_once __DIR__ . '/app/controllers/Homepage.php';
include_once __DIR__ . '/app/controllers/Login.php';
include_once __DIR__ . '/app/controllers/Produto.php';

include_once __DIR__ . '/app/models/Usuario.php';
include_once __DIR__ . '/app/models/Produto.php';
include_once __DIR__ . '/app/models/Carrinho.php';

use App\Database;
use Steampixel\Route;

use App\Controllers\HomepageController;
use App\Controllers\LoginController;
use App\Controllers\ProdutoController;

// Cria o schema no banco de dados
Database::createSchema();

// Cria uma instância do controlador para uso
$controller1 = new HomepageController();
$controller2 = new LoginController();
$controller3 = new ProdutoController();

// Parte responsável pelo direcionamento das requisições aos respectivos métodos do controlador.

// ROUTE GET HOMEPAGE
Route::add('/homepage', fn () => $controller1->homepageIndex(), ['get']);
Route::add('/pageNotFound', fn () => $controller1->pageNotFound(), ['get']);

// ROUTE GET LOGIN
Route::add('/login', fn () => $controller2->loginIndex(), ['get']);
Route::add('/register', fn () => $controller2->cadastrarUsuarioIndex(), ['get']);
Route::add('/user/info', fn () => $controller2->info(), ['get']);
Route::add('/user/list', fn () => $controller2->listar(), ['get']);

// ROUTE POST LOGIN
Route::add('/login', fn ()  => $controller2->login(), ['post']);
Route::add('/register', fn ()  => $controller2->cadastrarUsuario(), ['post']);
Route::add('/logout', fn () => $controller2->sair(), ['post']);
Route::add('/user/remove', fn ()  => $controller2->deletar(), ['post']);

// ROUTE GET PRODUCT
Route::add('/product/register', fn() => $controller3->cadastrarProdutoIndex(), ['get']);
Route::add('/product/list', fn() => $controller3->listarProdutos(), ['get']);
Route::add('/product/search', fn () => $controller3->searchProduct(), ['get']);
Route::add('/product/detail', fn() => $controller3->detailProduct(), ['get']);

// ROUTE POST PRODUCT
Route::add('/product/register', fn() => $controller3->cadastrarProduto(), ['post']);
Route::add('/product/remove', fn ()  => $controller3->deletarProduto(), ['post']);

// ROUTE GET CART
Route::add('/cart', fn() => $controller4->cartIndex(), ['get']);

// Rota auxiliar para redirecionar o usuário.
Route::add('/', function () {
    header('Location: ' . BASEPATH . 'homepage');
}, ['get']);

Route::add('/.*', function () {
    http_response_code(404);
    header('Location: ' . BASEPATH . 'pageNotFound');
}, ['get']);

// Inicia o router
Route::run(BASEPATH);
?>