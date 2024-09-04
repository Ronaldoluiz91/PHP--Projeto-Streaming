<?php


//Criando a classe de LOGIN

class LOGIN
{
    private $userLoginEmail;
    private $userPassword;
    private $newUser;
    private $newEmail;
    private $newPassword;
    private $confirmPassword;


    // Métodos para email e senha de login
    public function setUserLoginEmail(String $userLoginEmail)
    {
        $this->userLoginEmail = $userLoginEmail;
    }
    public function getUserLoginEmail()
    {
        return $this->userLoginEmail;
    }

    public function setUserPassword(String $userPassword)
    {
        $this->userPassword = $userPassword;
    }
    public function getUserPassword()
    {
        return $this->userPassword;
    }



    // Métodos para novo usuário e email
    public function setNewUser(String $newUser)
    {
        $this->newUser = $newUser;
    }
    public function getNewUser()
    {
        return $this->newUser;
    }

    public function setNewEmail(String $newEmail)
    {
        $this->newEmail = $newEmail;
    }
    public function getNewEmail()
    {
        return $this->newEmail;
    }


    public function setnewPassword(String $newPassword)
    {
        $this->newPassword = $newPassword;
    }
    public function getnewPassword()
    {
        return $this->newPassword;
    }

    //CONFIRMAÇÃO DE SENHA NOVO USUARIO
    public function setConfirmPassword(String $confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;
    }
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
}



