<?php

class Categoria //fazer com 8 e mudar nome da classe, get e set de todos
{
    private $id;
    private $nome;
    private $descricao;


 
    public function getId()
    {
        return $this->id;
    }

 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

  
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

  
    public function setDescricao($nome)
    {
        $this->descricao = $descricao;

        return $this;
    }


    public function getObs()
    {
        return $this->obs;
    }


    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }
}
