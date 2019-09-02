<?php

    require_once('functions.php');
    require_once('models/pdo.php');

    $userLogin['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $userLogin['password'] = isset($_POST['pass']) ? $_POST['pass'] : ''; 
    $errors=[];
    
    
    //Si existe el usuario creamos la session
    if($_POST){
        if(!traerUsuarioConEmail($userLogin['email'], $db)){
            $errors['email'] = 'El email ingresado no es valido';
        } else{
            $user = traerUsuarioConEmail($userLogin['email'], $db);
            if (!password_verify($userLogin['password'], $user['password'])){
                $errors['pass'] = 'La contraseña ingresada es incorrecta'; 
            }
        }
        if (!$errors){
            header('Location: profile.php');
        }

    }

?>