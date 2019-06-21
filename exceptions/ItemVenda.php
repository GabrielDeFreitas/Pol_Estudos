<?php
 
namespace ItemVenda;
 
 
class ItemVenda
{
    private $preco;
    private $descricao;
 
    public function getPreco()
    {
        return $this->preco;
    }
 
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
 
    public function getDescricao()
    {
        return $this->descricao;
    }
 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
     
}