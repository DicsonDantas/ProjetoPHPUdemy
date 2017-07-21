<?php 

try{

	// sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;

// ELE NEM CHEGA A ENTRAR NO BLOCO DO TRY // 
//SE EU REMOVER A URL, FUNFA.. EU ACHO.. N TENHO CTZ	
//esquece esse exemplo ele tá confuso.. 

	
$conn = new PDO("sqlsrv:Server=DICK\SQLEXPRESS;Database=dbphp7;ConnectionPooling=0", "sa", "root");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(Exception $e)
{
die(print_r( $e->getMessage() ) );

}

$tsql = "SELECT * FROM tb_usuarios ORDER BY deslogin";
$getResults = $conn->prepare ( $tsql); 
$getResults->execute();
$results = $getResults->fetchAll(PDO::FETCH_BOTH);

foreach($results as $row){
	echo $row['id'].' '.$row['name'];	

}














?>