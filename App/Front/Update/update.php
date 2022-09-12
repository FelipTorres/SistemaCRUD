<?php
    if(!empty($_GET['cod_user']))
    {
        require '../../Logar/connection.php';
        require '../../Db_system/crud.php';

        $cod_user = $_GET['cod_user'];

        $sql = "SELECT * FROM user WHERE cod_user= $cod_user";

        $result = $pdo->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../images/a0ov7fxh8zkrjipkm7nj.jpg">
    <link rel="stylesheet" href="update.css">
    <title>SystemUpdate</title>

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
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10%;
        align-items: center;
        height: 600px;
        width: 600px;
        margin: auto;
        margin-top: 2%;
        padding: 2%;
        box-shadow: 15px 20px rgba(130, 130, 206, 0.24);
        background-color: #D8BFD8;
        border: solid 3px black;
    }

    .card-header {
        position: relative;
        text-align: center;
        letter-spacing: 3px;
        font-size: 18px;
        margin-top: -40%;
        margin-left: auto;
    }

    .title{
        margin-left: 1%;
        margin-top: 30%;
    }

    .hr{
        width: 100%;
    }

    .card-content{
        text-align: center;
    }

    label{
        padding: 15px 5px 5px 0;
        text-align: center;
        display: block;
        font-size: 15px;
    }

    input{
        padding: 3%;
        width: 250px;
        box-shadow: 1px 1px black;
    }

    .submit{
        align-items: center;
        width: 100px;
        border-radius: 25%;
        position: relative;
        margin-left: 40%;
        margin-top: 10%;
        border: none;
        box-shadow: 1px 1px black;
        letter-spacing: 2px;
    }

    .list{
        height: 2px;
        margin-left: 20%;
        margin-top: 3%;
        text-align: center;
        list-style: none;
        width: 2%;
        height: 2%;
        display: flex;
        position: fixed;
        align-items: center;
    }

    .link{
        padding: 10%;
        border-radius: 15%;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: -2% -2%;
    }

    .link:hover{
        transition: 0.2s;
        text-decoration: underline;
        background-color:  #ba55d380;
    }
</style>
</head>
<body>
    <div class="box">
        <form class="card" action="../../Db_system/index.php?operacao=update&cod_user=<?= $cod_user ?>" method="POST">

            <div class="card-header">

                <h2 class="title">Atualização de Cadastro</h2>
                <hr class="hr">
            </div>

            <div class="card-content">

                <input type="hidden" id="cod_user" name="cod_user" value="<?= $cod_user ?>">

                <div class="card-content-name">

                    <label class="user" for="usuario">Digite seu nome</label>
                    <input type="text" id="name" autocomplete="off" name="name">

                </div>

                <div class="card-content-dtNascimento">

                    <label class="dtNascimento" for="dtNascimento">Digite sua Data de Nascimento</label>

                    <input type="date" id="dtNascimento" autocomplete="off" name="dtNascimento">

                </div>

                <div class="card-content-email">

                    <label class="email" for="email">Digite seu email</label>

                    <input type="email" id="email" autocomplete="off" name="email">

                </div>

                <div class="card-content-password">

                    <label class="pass" for="password">Digite sua senha</label>

                    <input type="password" id="password" autocomplete="off" name="password">

                </div>

            </div>

            <div class="card-footer">

                <input type="submit" value="Alterar" class="submit">

                <ul class="list">
                    <li class="link"><a class="exit" href="../List/list.php">Voltar</a></li>
                </ul>

            </div>

    </div>
</body>
</html>