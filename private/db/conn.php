<?php

$serverDB = "127.0.0.1:3306";

$userDB = "root";
$passwordDB = "";
$nameDB = "dbstreaming";

//Criando a conexão com MySQL via objeto mysql
$conn = @new mysqli(
    $serverDB, $userDB, $passwordDB, $nameDB
);

if($conn->connect_error){
    $resp = "Erro de conexão <br>";
    $resp = $resp.$conn->connect_errno;
    $resp = $resp. "<br>" . "Erro: ".$conn->connect_error;
}else{
    $resp = "Sucesso! <br>";
    $resp = $resp. "Host informado: ".$conn->host_info;
    $resp = $resp. "<br>"."Protocolo versão: ".$conn->protocol_version;
    $resp = $resp."<br>";
    $resp = $resp. $nameDB;

}

//  echo $resp;

?>



