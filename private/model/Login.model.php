<?php

// include("../controller/Login.controller.php");
// $LOGIN = new LOGIN();


// $fxLogin = $_POST['fxLogin'];
// $cadUser = $_POST['fxCadUser'];


// switch ($fxLogin) {
//     case 'Logar':
//         $userLoginEmail = $_POST['userLoginEmail'];
//         $userPassword = $_POST['userPassword'];

//         $LOGIN->setUserLoginEmail($userLoginEmail);
//         $LOGIN->setUserPassword($userPassword);
//         break;

//     case 'Cadastrar':
//         $newUser = $_POST['newUser'];
//         $newEmail = $_POST['newEmail'];
//         $userPassword = $_POST['password'];
//         $confirmPassword = $_POST['confirmPassword'];

//         // $LOGIN->setnewUser($newUser);
//         // $LOGIN->setnewEmail($newEmail);

//         $LOGIN->setUserLoginEmail($newUser);
//         $LOGIN->setUserLoginEmail($newEmail);
//         $LOGIN->setUserPassword($userPassword);
//         $LOGIN->setConfirmPassword($confirmPassword);
//         break;

//         default:
//         echo "ERRO.";
//         break;


include("../controller/Login.controller.php");
$LOGIN = new LOGIN();

$fxLogin = $_POST['fxLogin'];

switch ($fxLogin) {
    case 'Logar':
        $userLoginEmail = $_POST['userLoginEmail'];
        $userPassword = $_POST['userPassword'];

        $LOGIN->setUserLoginEmail($userLoginEmail);
        $LOGIN->setUserPassword($userPassword);
        break;

    case 'Cadastrar':
        $newUser = $_POST['newUser'];
        $newEmail = $_POST['newEmail'];
        $newPassword = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        $LOGIN->setNewUser($newUser);
        $LOGIN->setNewEmail($newEmail);
        $LOGIN->setnewPassword($newPassword);
        $LOGIN->setConfirmPassword($confirmPassword);

    default:
        echo "Ação desconhecida.";
        break;
}




echo "<pre>";
var_dump($LOGIN);
echo "</pre>";
