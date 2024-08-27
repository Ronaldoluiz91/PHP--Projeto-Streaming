<?php
$pageName = "Entre e curta";
include ("inc/head.inc.php");

?>

<main>
    <h1>Login</h1>
    <form method="post" action="#">
        <label>Usuario:</label><br>
        <input type="text" name="user-login" required placeholder="Digite seu email"><br>
        
        <label>Senha:</label><br>
        <input type="text" name="user-password" required placeholder="Digite sua senha"><br> <!--Depois muda o type para password -->
        <br>
        <input type="submit" value="Entre e curta">
    </form>
    <hr>
    <p>
        <a href="recover-password-form.php">Recuperar senha</a> | <a href="user-register.php">Cadastrar usuário</a>
    </p>
</main>

<?php include ("inc/footer.inc.php"); ?>