<?php
session_start();
require '../../Db_system/crud.php';
$newuser = new User();

filter_input(INPUT_POST, 'SendPesqUser' );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../../images/a0ov7fxh8zkrjipkm7nj.jpg">
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>SystemList</title>

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
      display: inline-block;
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
      margin-bottom: 3%;
    }

    .logo:hover{
      transition: 0.3s;
      width: 8%;
      height: 8%;
    }

    .title{
      font-size: 170%;
      margin-left:36%;
      margin-top: -10%;
      position: relative;
      width: 30%;
      text-align: center;
    }

    .list{
      margin-left: 73%;
      margin-top: -1%;
      list-style: none;
      text-align: center;
      width: 100%;
      display: flex;
      position: absolute;
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

    .box-search{
      position: relative;
      justify-content: center;
      display: flex;
      width: 20%;
      margin-left: 41%;
    }

    #pesquisar{
      width: 120em;
    }

    .thead-dark {
      text-decoration: none;  
      border-radius: 100px;
      margin-top: -100px;
    }
</style>
</head>

<body>
  <form>
    <div class="box">
      <div class="card">
        <div class="img">
          <a href="../Main/main.php"><img class="logo" src="../../images/a0ov7fxh8zkrjipkm7nj.jpg" alt="logo"></a>
        </div>

            <div class="card-header">
                <h2 class="title">Listagem de Usuários</h2>

                <ul class="list">
                    <li><a class="link" href="https://www.linkedin.com/in/felipe-torres-b6b54b207/">Sobre</a></li>
                    <li><a class="exit" href="../Main/main.php">Voltar</a></li>
                </ul>

                <div class="box-search">
                    <input type="search" placeholder="Pesquisar Usuário" id="pesquisar">
                    <button class="btn btn-primary" name="SendPesqUser">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                    </button>
                </div>

            </div>
      </div>
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
                      <a class='btn btn-sm btn-primary' href='../Update/update.php?cod_user=$value[cod_user]'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                      <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
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