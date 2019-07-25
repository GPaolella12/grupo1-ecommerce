<?php

    require_once('functions.php');

    $db = conectarDb($dns, $db_user, $db_pass, $opt);

    $userLogin['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $userLogin['pass'] = isset($_POST['pass']) ? password_hash($_POST['pass'],PASSWORD_DEFAULT) : '';
    
    $errors=[];
    
    
    //Si existe el usuario creamos la session
    if($_POST){
        if(!traerUsuarioConEmail($userLogin['email'], $db)){
            $errors['email'] = 'El email ingresado no es valido';
        } else{
            $user = traerUsuarioConEmail($userLogin['email'], $db);
            
            if (password_verify($user['password'],$userLogin['pass'])){
                $errors['pass'] = 'La contraseña ingresada es incorrecta'; 
            }
        }

        if (!$errors){
            header('Location: profile.php');
        }

    }

?>