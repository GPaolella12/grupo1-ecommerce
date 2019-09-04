<?php
    require_once('pdo.php');

    function table(){
        return 'sales';
    }

    function allSales($db){
        $query = $db->prepare("SELECT * FROM" . table());
        return $query->execute()->fetchAll();
    }