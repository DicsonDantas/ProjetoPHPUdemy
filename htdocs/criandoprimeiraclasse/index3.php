<?php

class Cliente{
    private $nome;
    private $cpf;
    private $tel;

    public function __construct ($nome,$cpf,$tel){
        $this->nome=$nome;
        $this->cpf=$cpf;
        $this->tel=$tel;

    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome=$nome;
    }

    public function getCpf():float{
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf=$cpf;
    }
    public function getTel(){
        return $this->tel;
    }

    public function setTel($cpf){
        $this->cpf=$cpf;
    }
    public function __toString(){
        return $this->nome . " , " . $this->cpf . "," . $this->tel;
    }

}

$dicson = new Cliente("Dicson Eneas Dantas Junior", 13624170767899, "21990017845");
echo($dicson);
var_dump($dicson);

?>