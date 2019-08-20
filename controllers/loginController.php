<?php

    require_once('functions.php');

    $db = conectarDb($dns, $db_user, $db_pass, $opt);

    $userLogin['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $userLogin['password'] = isset($_POST['pass']) ? password_hash($_POST['pass'],PASSWORD_DEFAULT) : ''; 
    $errors=[];
    
    
    //Si existe el usuario creamos la session
    if($_POST){
        if(!traerUsuarioConEmail($userLogin['email'], $db)){
            $errors['email'] = 'El email ingresado no es valido';
        } else{
            $user = traerUsuarioConEmail($userLogin['email'], $db);
            if (password_verify($user['password'],$userLogin['password'])){
                $errors['pass'] = 'La contraseña ingresada es incorrecta'; 
            }
        }
        var_dump($errors);exit;
        if (!$errors){
            header('Location: profile.php');
        }

    }

?>