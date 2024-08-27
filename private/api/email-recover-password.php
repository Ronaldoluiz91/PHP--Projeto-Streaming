<?php

include("../db/conn.php");


$emailNameRec = $_POST['user-name-email'];

//verificar se o email ou usuario esta cadastrado no banco de dados
$sql = "SELECT hash FROM tbl_login WHERE email='$emailNameRec' OR nome='$emailNameRec'" ;

$exc = $conn->query($sql);

if ($exc->num_rows > 0) {
    while ($row = $exc->fetch_assoc()) {
        $hashRec = $row["hash"];

        echo "A sua senha será recuperada clicando no link abaixo <br>";
        echo "<a href ='link-rec-password.php?idRec=$hashRec'>Clique aqui</a>";  
    }
 
}else{
    echo "Usuario não encontrado";
}


?>

