<?php

    $dns = 'mysql:host=localhost;dbname=phone_house;port=3306';
    $db_user = 'root';
    $db_pass = '';
    $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    function conectarDb($dns, $db_user, $db_pass, $opt){
        try{
            $db = new PDO($dns, $db_user, $db_pass, $opt);
            return $db;
        }
        catch(PDOException $Exception){
           $Exception -> getMessage();
           return $Exception;
        }
    }

    function traerEmails($db){
        $query = $db -> prepare("SELECT email FROM users");
        $query -> execute();

        $usersEmails = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $usersEmails;
    }

    function validarEmail($newEmail,$usersEmails){
        foreach ($usersEmails as $userEmail) {
            foreach ($userEmail as $email) {
                if ($newEmail == $email) {
                    return false;
                }
            }
        } 
        return true;
    }

    function traerUsuarios($db){
        $query = $db -> prepare("SELECT email FROM users");
        $query -> execute();

        $allUsers = $query -> fetchAll(PDO::FETCH_ASSOC);

        return $allUsers;        
    }


?>