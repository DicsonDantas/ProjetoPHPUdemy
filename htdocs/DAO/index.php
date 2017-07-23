<?php 

require_once("config.php");

//CARREGA UM USUARIO
/*
$root = new Usuario(); 
$root->loadById(1);
echo ($root); 
*/


// CARREGA UMA LIST DE USUARIOS
// $lista = Usuario::getList();
// echo json_encode($lista);
 
// CARREGA UMA LISTA DE USUARIOS UTILIZANDO BUSCA NOMINAL PELO LOGIN
// $search = Usuario::search("dic");
// echo json_encode($search);



//DA UM INSERT NO BANCO UTILIZANDO PROCEDURES, CRIA UMA NOVA INSTANCIA DE USUARIO
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@aluno");

$aluno->insert();

echo $aluno;


 ?>