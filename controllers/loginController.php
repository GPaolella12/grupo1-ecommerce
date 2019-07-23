<?php

    require_once('functions.php');

    $db = conectarDb($dsn, $db_user, $db_pass, $opt);

    //Si existe el usuario creamos la session
    if($_POST){
        var_dump(traerUsuarios($db));

    }

?>