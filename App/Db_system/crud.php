<?php 

    declare(strict_types=1);
    class User //Class criada para criação dos metodos de CRUD
    {
        private $conexao; 

        public function __construct() 
        {
            try //Realiza conexão ao banco
            {
                $this->conexao = new PDO('mysql:hostmysql;dbaname=db_system','root','admin');
            }
            catch(Exception $e) 
            {
                echo $e->getMessage();//Em caso de falha na conexão será exibido a mensagem de Exceção
                die();
            }
        }

        public function list(): array //Metódo para fazer listagem da tabela user
        //Não está em uso
        {
            $sql = 'select * from db_system.user';

            $user = [];
        
            foreach ($this->conexao->query($sql) as $key => $value) 
            {
                array_push($user, $value);
            }

            return $user;
        }

        public function insert(string $nome, string $data, string $email, string $pass) : int //Metódo para fazer inserção na tabela user
                                                                                             //Recebe como parametro todos atributos para preencher a tabela
        {
            $sql = 'insert into db_system.user(nome, data_nascimento, email, password) values(?, ?, ?, ?)'; //Linha de comando para adicionar itens na tabela

            $prepare = $this->conexao->prepare($sql);

            $prepare->execute([$nome, $data, $email, $pass]);

            return $prepare->rowCount();
        }

        public function update(string $nome, string $data, string $email, string $pass, int $cod_user) : int //Metódo para fazer a atualização de dados da tabela user
        {
            
            $prepare = $this->conexao->prepare('update db_system.user set nome = ?, data_nascimento = ?, email = ?, password = ? where cod_user = ?');

            $prepare->execute([$nome, $data, $email, $pass, $cod_user]);

            return $prepare->rowCount(); 
        }

        public function delete(int $cod_user) : int //Metódo para fazer a exclusão de dados da tabela user
        //Não está em uso
        {
            $sql = 'delete from db_system.user where cod_user = ?';

            $prepare = $this->conexao->prepare($sql);
        
            $prepare->execute([$cod_user]);
        
            return $prepare->rowCount();
        }        
    }