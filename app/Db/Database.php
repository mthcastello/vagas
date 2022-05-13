<?php
namespace App\Db;
use PDO; // chamar o PDO para uso

class Database
{ // Criar a classe

    const HOST = 'localhost'; // @var string host de conexao com o banco de dados

    const NAME = 'wdev_vagas'; // @var string nome do banco de dados

    const USER = 'root'; // @var string usuario do bando de dados

    // const PASS = ''; @var string caso haja senha no db

    private $table; //@var [type] Nome da tabela a ser manipulada.

    private $connection; //@var PDO Instancia de conexão com banco de dados

    public function __construct($table = null)
    { // @param string contrutor caso defina algum valor, já ira definir a classe $table
        $this->table = $table;
        $this->setConnection(); // função para utilizar o PDO

    }

    private function  setConnection(){
        try{

            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e)
        {
            die('ERROR: '.$e->getMessage());
        }


    }

}

