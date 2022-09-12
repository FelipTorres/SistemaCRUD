<?php
session_start();
require '../../Db_system/crud.php';
$newuser = new User();

    if(!empty($_GET['cod_user']))
    {
        require '../../Logar/connection.php';
        require '../../Db_system/crud.php';

        $cod = $_GET['cod_user'];

        $sql = "SELECT * FROM user WHERE cod_user= $cod";

        $result = $pdo->query($sql);

        if($result->num_rows > 0) 
        {
            $sqlDel = "DELETE FROM user WHERE cod_user=$cod";
            $resultDel = $pdo->query($sqlDel);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../images/a0ov7fxh8zkrjipkm7nj.jpg">
    <link rel="stylesheet" href="delet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>SystemDelet</title>

<style>
    body{
        margin: 0%;
        background: linear-gradient(45deg, #483D8B, #800080, #BA55D3, #E6E6FA);
        background-size: 300% 300%;
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
        align-items: center;
        justify-content: center;
        border-radius: 5%;
        align-items: center;
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
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .img{
        position: relative;
        top: 3vh;
    }

    .logo{
    width: 7%;
    height: 7%;
    border-radius: 15%;
    position: relative;
    margin-left: 3%;
    margin-bottom: 0%;
    margin-top: 1%;
    }

    .logo:hover{
    transition: 0.3s;
    width: 8%;
    height: 8%;
    }

    .title{
        display: block;
        margin-left:39%;
        margin-top: -10%;
    }

    .list{
        margin-left: 55%;
        margin-top: -6%;
        list-style: none;
        text-align: center;
        width: 100%;
        display: flex;
        position: fixed;
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
        padding: 15px;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: 3px 20px;
    }

    .link{
        border-radius: 15%;
        padding: 15px;
        border: solid 1px black;
        background-color: #ba55d327;
        text-decoration: none;
        margin: 3px 20px;
    }

    .thead-dark {
        text-decoration: none;
        border-radius: 100px;
        margin-top: -100px;
    }
</style>


</head>
<body>
    <form action="">
    <div class="box">
            <div class="card">
                <a href="../Main/main.php"><img class="logo" src="../../images/a0ov7fxh8zkrjipkm7nj.jpg" alt="logo"></a>

                <div class="card-header">
                    <h2 class="title">Delete de Usuários</h2>

                    <ul class="list">
                        <li><a class="link" href="https://www.linkedin.com/in/felipe-torres-b6b54b207/">Sobre</a></li>
                        <li><a class="exit" href="../Main/main.php">Voltar</a></li>
                    </ul>
                    
                </div>
            </div>

            <div class="nav">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Codigo de Usuário</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Email</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($newuser->list() as $value)
                            {
                            echo "<tr>";
                            echo "<td>".$value['cod_user']."</td>";
                            echo "<td>".$value['nome']."</td>";
                            echo "<td>".$value['data_nascimento']."</td>";
                            echo "<td>".$value['email']."</td>";
                            echo "<td>".$value['password']."</td>";
                            echo "<td>
                                    <a class='btn btn-sm btn-danger' href='exe.php?cod_user=$value[cod_user]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                    </svg>
                                    </a>
                                    </td>";
                            echo "</tr>";
                            }
                        ?>
                    </tbody>
                    </table>
                    </div>

    </form>
</body>
</html>