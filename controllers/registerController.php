<?php

    require_once('functions.php');
    require_once('models/pdo.php');

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $dni = isset($_POST['dni']) ? $_POST['dni'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $pass = isset($_POST['password']) ? $_POST['password'] : '';
    $passConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : '';
    $news = isset($_POST['news']) ? $_POST['news'] : '';
    $terms = isset($_POST['terms']) ? $_POST['terms'] : '';

    //Si hay POST validamos
    $errors=[];

    if ($_POST) {

        // Validamos el nombre
        if ($name){
            if (strlen($name) < 3){
                $errors['name'] = 'El nombre debe tener al menos 3 caracteres';
            }
        } else{
            $errors['name'] = 'Este campo no puede estár vacío';
        }
        
        //Validamos el apellido
        if ($lastName){
            if (strlen($lastName) < 5){
                $errors['lastName'] = 'El nombre debe tener al menos 5 caracteres';
            }
        } else{
            $errors['lastName'] = 'Este campo no puede estár vacío';
        }

        //Validamos el DNI
        if($dni){
            if (strlen($dni) < 6 && strlen($dni) > 8){
                $errors['dni'] = 'El dni debe tener entre 6 y 8 caracteres';
            }
        } else{
            $errors['dni'] = 'Este campo no puede estár vacío';
        }

        //Validamos el email
        if ($email) {
            $allEmails = traerEmails($db);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'El email debe tener un formato valido';
            }  
            if (!validarEmail($email,$allEmails)) {
                $errors['email'] = 'El mail ya está en uso';
            }
        } else{
            $errors['email'] = 'Este campo no puede estár vacío';
        }

        //Validamos el telefono
        if ($phone){
            if(!is_numeric($phone)){
                $errors['phone'] = 'Este campo puede contener solo numeros';
            }
            if (strlen($phone) < 8) {
                $errors['phone'] = 'El telefono no puede tener menos de 8 caracteres';
            }
            elseif(strlen($phone) > 10){
                $errors['phone'] = 'El telefono no puede tener más de 10 caracteres';
            }
        } else{
            $errors['phone'] = 'Este campo no puede estár vacío';
        }

        //Validamos la contraseña
        if ($pass){
            if (strlen($pass) < 8){
                $errors['password'] = 'La contraseña debe tener al menos 8 caracteres';
            }
        } else{
            $errors['password'] = 'Este campo no puede estár vacío'; 
        }

        //Validamos la confirmación de contraseña
        if ($passConfirm){
            if (strlen($passConfirm) < 8){
                $errors['passwordConfirm'] = 'La contraseña debe tener al menos 8 caracteres';
            }
            if ($passConfirm != $pass){
                $errors['passwordConfirm'] = 'La contraseñas no coinciden';
            }
        } else{
            $errors['passwordConfirm'] = 'Este campo no puede estar vacío';
        }

        if (!$terms){
            $errors['terms'] = 'Tenes que aceptar los terminos y condiciones';
        }
        if (!$errors) {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $addUser = $db -> prepare("INSERT INTO users VALUES (NULL, '$name', '$lastName', '$dni', '$email', '$phone', '$pass', '$news' )");
    
            $addUser -> execute();

            header('Location: login.php');
        }
    }



?>