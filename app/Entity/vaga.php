<?php

namespace App\Entity;

use App\Db\Database;

class Vaga{
    // identificador unico da vaga @var integer
    public $id;

    // titulo da vaga @var string
    public $titulo;

    // descrição da vaga ( pode conter html) @var string
    public $descricao;

    // define se a vaga esta ativa @var string (s/n)
    public $ativo;

    // Data da publicação da vaga @var string
    public $data;

    public function cadastrar(){   //@return boolean Método responsavel por cadastrar uma nova vaga no banco de dados
            //definir a data

            $this->data = date('Y-m-d H:i:s');

            //inserir a vaga no campos

            $obDatabase = new Database('vagas');
            $this->id = $obDatabase->insert([
                'titulo' => $this->titulo,
                'descricao' => $this->descricao,
                'ativo'=> $this->ativo,
                'data'=> $this->data
            ]);



            return true; //retornar sucesso


    }
}
