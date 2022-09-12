<?php
    session_start();
    include_once '../../Logar/connection.php';

    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../Login/front.php');
    }
    $logado = $_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../images/a0ov7fxh8zkrjipkm7nj.jpg">
    <title>SystemConnect</title>

<style>
    body{
        margin: 0%;
        background: linear-gradient(45deg, #483D8B, #800080, #BA55D3, #E6E6FA);
        background-size: 300% 300%;
        font-family: 'Courier New', Courier, monospace;
        animation: colors 10s ease infinite;
    }

    @keyframes colors{
        0%{
            background-position: 0% 50%;
        }
        50%{
            background-position: 100% 50%;
        }
        100%{
            background-position: 0% 50%;
        }
    }

    .box{
        justify-content: center;
        border-radius: 5%;
        height: 80vh;
        width: 80%;
        margin: auto;
        margin-top: 2%;
        padding: 2%;
        box-shadow: 15px 20px rgba(130, 130, 206, 0.24);
        background-color: #D8BFD8;
        border: solid 3px black;
    }

    .card-header{
        align-items: center;
        border-top: 0.4px solid black;
        margin-top: 10px;
    }

    .logo{
        width: 7%;
        height: 7%;
        border-radius: 15%;
        position: relative;
        margin-left: 3%;
        margin-bottom: 1%;
    }

    .logo:hover{
        transition: 0.3s;
        width: 8%;
        height: 8%;
    }

    .title{
        text-align: center;
        position: block;
        margin-left:-300%;
        margin-top: -6%;
        width: 700%;
    }

    .title:hover{
        transition: 0.2s;
        text-decoration: underline;
        color: rgba(130, 130, 206, 0.9);
        cursor:pointer;
    }

    .list{
        margin-left: 75%;
        margin-top: -4%;
        list-style: none;
        text-align: center;
        width: 100%;
        display: flex;
    }

    .exit:hover{
        transition: 0.2s;
        text-decoration: underline;
        background-color:  #ba55d380;
    }

    .link:hover{
        transition: 0.2s;
        text-decoration: underline;
        background-color:  #ba55d380;
    }

    .exit{
        border-radius: 15%;
        padding: 10%;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: 3px 20px;
    }

    .link{
        border-radius: 15%;
        padding: 10%;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: 3px 20px;
    }

    .nav{
        text-align: center;
        width: 50%;
        height: 30%;
        margin-top: 5%;
        margin-left: 25%;
        border-radius: 5%;
    }

    .submit{
        font-size: 120%;
        width: 50%;
        display: inline-block;
        border-radius: 10%;
        padding: 15px;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: 10% 20px;
    }

    .submit:hover{
        width: 60%;
        cursor: pointer;
        transition: 0.2s;
        text-decoration: underline;
        background-color:  #ba55d380;
    }

    .submit2{
        font-size: 120%;
        width: 50%;
        display: inline-block;
        border-radius: 10%;
        padding: 15px;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: 3% 20px;
    }

    .submit2:hover{
        width: 60%;
        cursor: pointer;
        transition: 0.2s;
        text-decoration: underline;
        background-color:  #ba55d380;
    }
</style>

</head>
<body>
<div class="box">

        <div class="card">
            <a href="main.php"><img class="logo" src="../../images/a0ov7fxh8zkrjipkm7nj.jpg" alt="logo"></a>

            <div class="card-header">
                
                <h2 class='title'>Bem Vindo ao Sistema</h2>
                <ul class="list">
                    <li><a class="link" href="https://www.linkedin.com/in/felipe-torres-b6b54b207/">Sobre</a></li>
                    <li><a class="exit" href="exit.php">Sair</a></li>
                </ul>
                
            </div>
        </div>

        <div class="nav">
            <form action="../List/list.php" method="POST">

                <input type="submit" value="Ver Listagem de Usuários" class="submit" name="list">

            </form>

            <form action="../Delet/delete.php" method="POST">

                <input type="submit" value="Deletar Usuários" class="submit2" name="list">

            </form>
        </div>

        
</body>
</html>