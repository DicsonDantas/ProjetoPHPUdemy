<?php 

class Usuario{
private $idusuario; 
private $deslogin; 
private $dessenha; 
private $dtcadastro; 

 public function getIdusuario(){
 	return $this->idusuario; 
 }

 public function setIdusuario($value){
 	$this->idusuario = $value;
 }

 public function getDeslogin(){
 	return $this->deslogin; 
 }

 public function setDeslogin($value){
 	$this->deslogin = $value;
 }
 
  public function getDessenha(){
 	return $this->dessenha; 
 }

 public function setDessenha($value){
 	$this->dessenha = $value;
 }

  public function getDtcadastro(){
 	return $this->dtcadastro; 
 }

 public function setDtcadastro($value){
 	$this->dtcadastro = $value;
 }


 public function loadById($id) {
 	$sql = new Sql();
   $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = : ID", array(":ID"=>$id));

 	if (count($results) >0){
       
       $row = $results[0];

       $this->setIdisuario($row['idusuario']);
       $this->setDeslogin($row['deslogin']);
       $this->setDessenha($row['dessenha']);
       $this->setDtcadastro(new DateTime($row['dtcadastro']));
 	}
 
	}
  
  public function login($login, $password){
  	$sql = new Sql();
  	$sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
        ":LOGIN"=>$login,
        ":PASSWORD"=>$password

  		));
  	 if(count($results) > 0) { 
  	 	
        $this->setData($results[0]);
  	 }
  	 else { 
  	 	throw new Exception("Login e/ou senha inválidos.");
  	 	}

  }

  public static function getList(){
       
       $sql = new Sql();
       return $sql->select("SELECT * FROM tb_usuarios order by deslogi Vn");
  

  }




  public static function search($login){
  	$sql = new Sql();
    return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
    	':SEARCH'=>"%".$login."%"));

  }

  //NESTE TRECHO É POSSÍVEL ENTENDER QUE O COMANDO DA UM SELECT ALL NA tb_usuarios Aonde a tupla deslogin for igual a CONSTANTE (que eu ainda não entendi mt bem o pq de as vezes ela ter :: as vezes somente :), cria um array que possui uma outra constante SEARCH, ou utiliza o valor dlea e atribui a login, porém não entendi também o porque desses dois sinais de porcentagem se somente o . é necessario para concatenar. 



   public function setData($data){

   	$this->setIdusuario($data['idusuario']);
   	$this->setDeslogin($data['deslogin']);
   	$this->setDessenha($data['dessenha']);
   	$this->setDtcadastro(new DateTime($data['dtcadastro'])); 

   }

   public function insert (){
   	$sql = new Sql();
   	$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD", array(
       ':LOGIN'=>$this->getDeslogin(),
       ':PASSWORD'=>$this->getDessenha()
   		));

   }



  public function __toString()
    {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro() //->format("d/m/Y H:i:s")
        ));
    }

}

	 ?>