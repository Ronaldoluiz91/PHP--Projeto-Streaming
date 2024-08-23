<?php
$pageName = "Cadastrar Usuário";
include("inc/head.inc.php");

?>

<main>
    <h1>Cadastrar Usuário</h1>
    <form method="post" action="../private/api/add-new-user.php">
        <label>Usuario:</label><br>
        <input type="text" name="user-name" required placeholder="Digite seu nome"><br>
        <label>Email:</label><br>
        <input type="text" name="user-email" required placeholder="Digite seu email"><br>
        <label>Senha:</label><br>
        <input type="text" name="user-password" required placeholder="Digite sua senha"><br> <!--Depois muda o type para password -->
        <label>Confirme sua senha:</label><br>
        <input type="text" name="user-confirm-password" required placeholder="Confirmação de senha"><br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    <hr>
    <p>
        <a href="#">Recuperar senha</a> | <a href="inde.php">Login</a>
    </p>
</main>

<?php include("inc/footer.inc.php"); ?>