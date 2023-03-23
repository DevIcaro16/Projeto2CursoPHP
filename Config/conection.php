<?php

//PDO para a conexão com o banco de dados : 

$host = "localhost" ;
$dbname = "agendaCursoPHP" ;
$user = "root" ; 
$password = "" ;

try {
    
    $connect = new PDO("mysql:host=$host;dbname=$dbname",$user,$password) ;

    //Para identificar e exibir o eventual erro na conexão com o DB : 

    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (\PDOException $e) {
    $error = $e->getMessage() ;
    echo"Erro: $error";
}

?>