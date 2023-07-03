<?php
include 'pessoa.class.php';
class Cliente extends Pessoa{
    private $rua;
    private $bairro;
    private $ndacasa;
    private $cidade;
    private $profissao;
    private $senha;
    private $repetirsenha;
    private $estadocivil;
    private $indic;
    private $nacionalidade;
    private $datadenasc;
    private $telefone_c;
    function cadastrar($rua, $bairro, $ndacasa, $cidade, $profissao, $senha, $repetirsenha, $estadocivil, 
            $indic, $nacionalidade, $datadenasc, $telefone_c){
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->ndacasa = $ndacasa;
        $this->cidade = $cidade;
        $this->profissao = $profissao;
        $this->senha = $senha;
        $this->repetirsenha = $repetirsenha;
        $this->estadocivil = $estadocivil;
        $this->indic = $indic;
        $this->nacionalidade = $nacionalidade;
        $this->datadenasc = $datadenasc;
        $this->telefone_c = $telefone_c;
    }
    function conf_elementos(){
        
    }
}
