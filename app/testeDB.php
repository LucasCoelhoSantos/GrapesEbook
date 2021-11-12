<?php

namespace App;

use PDO;
use PDOException;

// Classe responsável por fazer a gestão da conexão com o banco.
class Database {
    static $con;

    /**
     * Host de conexão com Banco de dados
     * @var string
     */
    const host = 'localhost';

    /**
     * Nome do banco de Dados
     * @var string
     */
    const name = 'grapesEbook';

    /**
     * Usuário do banco
     * @var string
     */
    const user = 'root';
        
    /**
     * Senha do banco 
     * @var string
     */
    const password = '';

    /**
     * Nome da tabela manipulada
     * @var[type]
     */
    private $table;

    /**
     * Instancia de conexão de banco de dados
     * @var PDO 
     */
    private $connection;

    /**
     * Define a tabela, instancia e conexao
     * @param string table
     */
    public function __construct($table){
        $this->table = $table;
        $this->setConnection();
    }
      
    /**
     * Método responsável por definir uma instancia do PDO e criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::host.';dbname='.self::name,self::user,self::password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die('ERROR '.$e->getMessage());
        }
    }

    static public function createSchema(): void {
        $con = self::getConnection();
        $con->exec('
            CREATE TABLE IF NOT EXISTS Usuarios (
                nome varchar(255),
                email TEXT PRIMARY KEY,
                senha TEXT 
            )
        ');

        $con->exec('
            CREATE TABLE IF NOT EXISTS Produtos (
                id numeric PRIMARY KEY AUTO_INCREMENT,
                nome varchar(255),
                descricao varchar(400),
                preco numeric,
                quantidade numeric
            )
        ');
    }
}
?>