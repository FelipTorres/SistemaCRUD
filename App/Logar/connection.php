<?php

    $host = "localhost";
    $user = "root";
    $passw = "admin";
    $banco = "db_system";

    try{
        $pdo = new PDO("mysql:dbname=".$banco."; host=".$host, $user, $passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "ERROR: ".$e->getMessage();
        exit;
    }

