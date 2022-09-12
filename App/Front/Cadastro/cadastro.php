<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../images/a0ov7fxh8zkrjipkm7nj.jpg">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form class="card" action="../../Db_system/index.php?operacao=insert" method="POST">

            <div class="card-header">

                <h2>Cadastro</h2>
                <hr class="hr">
            </div>

            <div class="card-content">

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

                <input type="submit" value="Registrar" class="submit">

            </div>

    </div>
</body>
</html>