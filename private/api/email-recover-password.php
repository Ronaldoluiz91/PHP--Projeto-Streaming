<?php

include("../db/conn.php");


$emailNameRec = $_POST['user-name-email'];

//verificar se o email ou usuario esta cadastrado no banco de dados
$sql = "SELECT hash, nome , email FROM tbl_login WHERE email='$emailNameRec' OR nome='$emailNameRec'" ;

$exc = $conn->query($sql);

if ($exc->num_rows > 0) {
    while ($row = $exc->fetch_assoc()) {
        $hashRec = $row["hash"];
        $nameRec = $row["nome"];
        $emailRec = $row["email"];
        
    }
    $url = "http://localhost/Streaming/public_html/password-reset-form.php?idRec=$hashRec";
    
    echo "Caro usuário você solicitou a recuperação de senha do Streaming? <br>
    Através do email ou usuário: $emailRec | $nameRec<br><br>
     Segue o link abaixo para recupera a senha clique ou se preferir copie o endereço e cole em seu navegador. <br> <br>
    <a href='$url' target='_blank'>$url</a>";
 
}else{
    echo "Usuario não encontrado";
}


?>

