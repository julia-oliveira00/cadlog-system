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
        //executa a consulta com o e-mail passado como parametro
        $stmt->execute(['email' => $email]);

        //retorna os dados do usuário encontrado como um array associativo
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    static public function find($id){


        $conn = Database::getConnection();

        //: segurança, marcador de posição (placeholder)
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
       
        $stmt->execute(['id' => $id]);

        //fetch busca uma alteração da próxima linha
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Função para criar um novo usuário no banco de dados
    static public function create($data){


        $conn = Database::getConnection();

        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
       
        $stmt->execute($data);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>