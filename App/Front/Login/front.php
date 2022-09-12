<?php
session_start();
include_once '../../Logar/connection.php';

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); 

    if(!empty($dados['envia'])) //Primeiro if para validar se o formulario está preechido com valores
    {
        $query_usuario =   "SELECT cod_user, nome, password, email 
                            FROM user 
                            WHERE email = :email
                            LIMIT 1";

        $result = $pdo->prepare($query_usuario);
        $result->bindParam(':email', $dados['email'], PDO::PARAM_STR);

        $result->execute();
    
        if(($result) AND ($result->rowCount() != 0)) //if para validar se o usuário digitados é existente no banco de dados
        {
            $row_usuario = $result->fetch(PDO::FETCH_ASSOC);

            if(($dados['password'] == $row_usuario['password'])) //if para validar se a senha digitada é existente no banco de dados
            {
                $_SESSION['email'] = $dados['email'];
                $_SESSION['senha'] = $dados['senha'];
                header("Location: ../Main/main.php");
            }
            else
            {
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                $_SESSION['msg'] = "<div class='erro'> <script>Swal.fire({icon: 'error',title: 'Oops...',text: 'Senha Inválida!'}) </script></div>";
            }
        }
        else
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            $_SESSION['msg'] = "<div class='erro'> <script>Swal.fire({icon: 'error',title: 'Oops...',text: 'Usuário Incorreto!'}) </script></div>";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="front.css">
    <link rel="shortcut icon" href="../../images/a0ov7fxh8zkrjipkm7nj.jpg">
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login</title>
</head>
<body>
    <div class="box">
        <form class="card" action="" method="POST">

            <div class="card-header">

                <h2>Login</h2>
                <hr class="hr">
            </div>

            <div class="card-content">

                <div class="card-content-area">
                <?php
                if (isset($_SESSION["msg"])){
                    echo $_SESSION["msg"];
                    unset($_SESSION["msg"]);
                }
                ?>
                    <label class="user" for="usuario">Email</label>

                    <input type="text" id="usuario" autocomplete="off" name="email" value="<?php if(isset($dados['email'])) 
                    {
                        echo $dados['email'];}?>">

                </div>

                <div class="card-content-area">

                    <label class="pass" for="password">Senha</label>

                    <input type="password" id="password" autocomplete="off" name="password" value="<?php if(isset($dados['password'])) 
                    {
                        echo $dados['password'];}?>">

                </div>

            </div>

            <div class="card-footer">

                <input type="submit" value="Login" class="submit" name="envia">

                <a href="../Cadastro/cadastro.php" class="cria_cadastro">Não tem cadastro? Crie uma conta</a>
                

            </div>
    </div>
</body>
</html>