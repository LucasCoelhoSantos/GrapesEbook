<?php

namespace App;

use PDO;

// Classe responsável por fazer a gestão da conexão com o banco.
class Database {
    static $con;

    static public function getConnection(): PDO {
        if (isset(self::$con)) return self::$con;

        self::$con = new PDO('sqlite:progweb-db.sqlite');
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$con;
    }

    static public function createSchema(): void {
        $con = self::getConnection();

        $con->exec('
            CREATE TABLE IF NOT EXISTS Usuarios (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome  TEXT,
                email TEXT,
                senha TEXT
            )
        ');
        
        //imagem BLOB,
        $con->exec('
            CREATE TABLE IF NOT EXISTS Produtos (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome  TEXT UNIQUE,
                autor TEXT,
                
                categoria TEXT,
                descricao TEXT,
                preco FLOAT
            )
        ');

        $con->exec('
            CREATE TABLE IF NOT EXISTS Carrinho (
                id_usuario,
                id_produto,
                FOREIGN KEY (id_usuario) REFERENCES Usuario(id),
                FOREIGN KEY (id_produto) REFERENCES Produto(id)
            )
        ');
    }
}
?>