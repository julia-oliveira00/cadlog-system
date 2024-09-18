<?php

//Inclui o arquivo de conexão que contem a classe Database para gerenciar a conexão com o BD
require_once 'models/database.php';

class User
{
    //Função para encontrar um usuário pelo email
    public static function findByEmail($email){
        //Coleta a conexão com o BD
        $conn = Database::getConnection();

        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");

        $stmt->execute(['email' => $email]);

        //retorna os dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>