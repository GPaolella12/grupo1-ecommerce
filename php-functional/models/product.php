<?php

    // CREATE TABLE `products` (
    //     `id` int(11) NOT NULL AUTO_INCREMENT,
    //     `title` varchar(255) NOT NULL,
    //     `description` text DEFAULT NULL,
    //     `price` decimal(10,0) NOT NULL,
    //     `discount` int(11) NOT NULL DEFAULT 0,
    //     `image` varchar(255) DEFAULT NULL,
    //     PRIMARY KEY (`id`)
    //    ) 

    require_once('pdo.php');
    
    function table(){
        return 'products';
    }

    function allProducts($db){
        $stmt = $db->prepare("SELECT * FROM " . table());
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getProduct($db, $id){
        $stmt = $db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

