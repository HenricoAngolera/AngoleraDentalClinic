<?php
class Pessoa{
    protected $nome;
    protected $celular;
    protected $telefone;
    protected $email;
    function conf_elementos(){
        if (!empty($this->nome || $this->celular || $this->telefone || $this->email)){
            
        }
        
    }
}