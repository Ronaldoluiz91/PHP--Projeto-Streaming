<?php

//Criar este arquivo na pasta api add-new-user.php
$username = $_POST["user-name"];
$userEmail = $_POST["user-email"];
$userPassword = $_POST["user-password"];
$userConfirmPassword = $_POST["user-confirm-password"];

if (
    (empty($username)) || (empty($userEmail)) || (empty($userPassword)) || (empty($userConfirmPassword)) || ($username === "") || ($userEmail === "") || ($userPassword === "") || ($userConfirmPassword === "")
) {
    $resp = "ERRO - Algum campo está vazio";
    //exit
}
//verificar se a senha e a sua confirmação de é restritamente igual
if ($userPassword !== $userConfirmPassword) {
    $resp = "ERRO - a senha não combina com a confirmação de senha";
} else {
    //criptografia se a senha e hash
    $apikkey = "manga";
    $apikkey = (md5($apikkey));

    $usernameC = (md5($username));
    $userEmailC = (md5($userEmail));
    $userPasswordC = (md5($userPassword));

    $senhaDB = (md5($apikkey . $userPasswordC . $userEmailC));
    $hashDB = (md5($usernameC . $apikkey . $userPasswordC));

    $custSenha = '09';
    $custHash = '08';

    $saltSenha = $senhaDB;
    $saltHash = $hashDB;

    //Cript senha
    $senhaDB = crypt($userEmail, '$2b$' . $custSenha . '$' . $saltSenha . '$');

    //Cript Hash
    $hashDB = crypt($usernameC, '$2b$' . $custHash . '$' . $saltHash . '$');
}

echo "Senha MD5:  $senhaDB <br> hash MD5: $hashDB ";
