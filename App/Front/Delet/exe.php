<?php
session_start();

    if(!empty($_GET['cod_user']))
    {
        require '../../Logar/connection.php';
        require '../../Db_system/crud.php';

        $cod = $_GET['cod_user'];

        $sql = "SELECT COUNT(*) FROM user WHERE cod_user= $cod";

        $result = $pdo->query($sql);

        if($result->num_rows >= 0) 
        {
            $sqlDel = "DELETE FROM user WHERE cod_user=$cod";
            $resultDel = $pdo->query($sqlDel);
            header('Location: delete.php');
        }
    }
?>