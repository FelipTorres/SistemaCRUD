<?php

    /*class Usuario
    {
        public function login($email, $senha) 
        {
            global $pdo;

            $sql = "SELECT * FROM user WHERE email = :email AND 'password' = :senha";//$sql recebe o retorno do comando
            $sql = $pdo->prepare($sql);

            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);

            $sql->execute();

            if($sql->rowCount() > 0)
            { 
                $dado = $sql->fetch();

                $_SESSION['cod_user'] = $dado['cod_user'];

                return true;
            }
            else
            {
                return false;
            }
        }
    }