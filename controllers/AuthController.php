<?php

require_once 'models/user.php';

//Classe responsável pela autenticação de usuário
class AuthController
{
    //Função resposável pelo processo de login
    public function login(){

        //Verifica de a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['password'];
        }
    }
}

?>