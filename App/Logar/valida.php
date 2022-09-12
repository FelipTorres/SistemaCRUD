<?php
    /*session_start();
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']))
    //Condição para acessar caso valores digitados sejam != NULL
    {   
        require 'connection.php';//Faz a conexão com o banco
        require 'classUser.php';//Conexão com a classe que verifica existência dos dados no banco 

        $u = new Usuario();
        //Instância do obj da classUser.php
        
        $email = $_POST['email'];//Envio dos dados que chegam do front.php
        $senha = $_POST['password'];//Envio dos dados que chegam do front.php

        if($u->login($email, $senha))//Execução do obj que foi instanciado
        //condição com erro
        {
            if(isset($_SESSION['cod_user']))
            {
                header('Location: /../Front/Main/main.php');
            }/*else{
                header('Location: ../Front/Login/front.php');
                echo 'ERRO1';
            }*/
    //    }
        /*else 
        {
            header('Location: ../Front/Login/front.php');
        }*/
    //}
   // else //Não existindo login ele retorna a pagina de Login
    //{ 
      //  header('Location: ../Front/Login/front.php');
    //}

?>