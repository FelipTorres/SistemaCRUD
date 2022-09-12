<?php
    require 'crud.php';
    $user = new User();

    switch($_GET['operacao'])
    {
        case 'list': //Não está em uso

            /*foreach($user->list() as $value)
            {
                echo 'Id: ' . $value['cod_user'] .
                '<br> Nome: ' . $value['nome'] . 
                '<br> Data de nascimento: ' . $value['data_nascimento'] . 
                '<br> Senha: ' . $value['password'] . 
                '<br> Email: ' . $value['email'] . '<hr>';
            }
            break;*/

        case 'insert':
            $status = $user->insert($nome = $_POST['name'], $data_nascimento = $_POST['dtNascimento'], $email = $_POST['email'], $pass = $_POST['password']);

            if(!$status) 
            {
                header('Location: ../Front/Cadastro/cadastro.php');
                echo "Não foi possivel executar a operação";
                return false;
            }
            
            header('Location: ../Front/Login/front.php');
            echo "Registro inserido com sucesso";
            break;

        case 'update': //???? 
            
            $status = $user->update($nome = $_POST['name'], $data_nascimento = $_POST['dtNascimento'], $email = $_POST['email'], $pass = $_POST['password'], $cod_user = $_POST['cod_user']);
            
            if(!$status) 
            {
                echo "Não foi possivel executar a operação";
                return false;
            }
            header('Location: ../Front/List/list.php');
            echo "Registro atualizado com sucesso";
            break;

        case 'delete': //Não está em uso
            /*$status = $user->delete(16); 

            if(!$status) 
            {
                echo "Não foi possivel executar a operação";
                return false;
            }
            
            echo "Registro removido com sucesso";
            break;*/
    }
?>