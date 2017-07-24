<?php
require_once("config.php");

/*CARREGA UM USUARIO, OK

$root = new Usuario(); 
$root->loadById(4);
echo $root;
echo "<br>";
echo json_encode($root);
/*

 CARREGA UMA LIST DE USUARIOS, OK
 $lista = Usuario::getList();
 echo json_encode($lista);
*/

/* CARREGA UMA LISTA DE USUARIOS UTILIZANDO BUSCA NOMINAL PELO LOGIN, OK
$search = Usuario::search("dic");
echo json_encode($search);
*/

/*CARREGA UM USUARIO USANDO O LOGIN E A SENHA
$usuario = new Usuario();
$usuario->login("root", "root");
echo $usuario;
*/


//DA UM INSERT NO BANCO UTILIZANDO PROCEDURES, CRIA UMA NOVA INSTANCIA DE USUARIO
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@aluno");
$aluno->insert();
echo $aluno;



 ?>