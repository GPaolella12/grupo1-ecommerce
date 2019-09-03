<?php

    function traerEmails($db){
        $query = $db -> prepare("SELECT email FROM usuarios");
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
        $query = $db -> prepare("SELECT * FROM users");
        $query -> execute();
        
        $allUsers = $query -> fetchAll(PDO::FETCH_ASSOC);
        
        return $allUsers;        
    }

    function traerUsuarioConEmail($email, $db){

        $query = $db -> prepare("SELECT * FROM usuarios WHERE(email = '$email')");
        $query -> execute();
        $user = $query -> fetch(PDO::FETCH_ASSOC);

        if($user){
            return $user;
        }
        return false;
    }
 
?>