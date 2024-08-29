<?php
$pageName = "Recuperação de Senha";
include ("inc/head.inc.php");

include("../private/db/conn.php");

$hash = $_GET['idRec'];

// echo $hash

?>

<main>
    <h1>Digite os dados para alterar sua Senha</h1>
    <form method="post" action="../private/api/update-password-reset.php">
        <label>Usuario/Email:</label><br>
        <input type="text" name="user-name-email"  placeholder="Digite seu usuario ou email "><br>
        <label>Senha:</label><br>
        <input type="text" name="new-password"  placeholder="Digite sua senha "><br>
        <label>Confirmação de Senha:</label><br>
        <input type="text" name="confirm-new-password"  placeholder="Digite sua senha "><br>
        <input type="hidden" name="hash" value="<?= $hash ?>" >
        <input type="submit" value="Alterar Senha">
    </form>
    <hr>
    <p>
        <a href="user-register.php">Cadastrar usuário</a> | <a href="inde.php">Login</a>
    </p>
</main>


<?php include("inc/footer.inc.php");
