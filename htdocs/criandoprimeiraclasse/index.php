<?php

class Cliente{



    private $nome;
    private $cpf;
    private $tel;




    public function __construct( $nome, $cpf, $tel )
    {
        $this->nome;
        $this->cpf;
        $this->tel;
    }



    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }



    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }


   public function __toString()
   {
    return $this->nome . "," .$this->cpf . "," . $this->tel ."<br>" ;
   }


}

$dicson = new Cliente("Dicson eneas dantas junior", 13624170767 ,  "21-99001-7845");

echo($dicson);
var_dump($dicson);
?>
