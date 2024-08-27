<?php
$pageName = "Recuperar senha";
include("inc/head.inc.php");
?>

<main>
    <h1>Recuperar senha do usuário</h1>
    <form method="post" action="../private/api/email-recover-password.php?">
        <label>Email/Usuario:</label><br>
        <input type="text" name="user-name-email" required placeholder="Digite seu usuario ou email"><br>
        <input type="submit" value="Recuperar senha">
    </form>
    <hr>
    <p>
        <a href="user-register.php">Cadastrar usuário</a> | <a href="inde.php">Login</a>
    </p>
</main>

<?php include("inc/footer.inc.php");
