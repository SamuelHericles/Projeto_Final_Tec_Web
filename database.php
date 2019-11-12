<?php
    class Cliente{
        private $id;
        private $nome;
        public $email;
        private $senha;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getAllCliente(){
            $conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=emp','root','1234');
            $query = "SELECT * FROM cliente";
            $lista_sql = $conexao->query($query);
            $lista = $lista_sql->fetchAll();//converte para lista php
            return $lista;
        }

        public function getVenda(){
            $conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=emp','root','1234');
            $query = "SELECT * FROM venda WHERE id_cliente = $this->id";
            $lista_sql = $conexao->query($query);
            $lista = $lista_sql->fetchAll();//converte para lista php
            return $lista;
        }
    }

    class Funcionario{
        private $id;
        private $nome;
        public $email;
        private $senha;
        public $cargo;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        public function getAllFuncionario(){
            $conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=emp','root','1234');
            $query = "SELECT * FROM produtos";
            $lista_sql = $conexao->query($query);
            $lista = $lista_sql->fetchAll();//converte para lista php
            return $lista;
        }

        public function get(){
            $conexao = new PDO('mysql:host=127.0.0.1:3306;dbname=emp','root','1234');
            $query = "SELECT * FROM venda WHERE id_cliente = $this->id";
            $lista_sql = $conexao->query($query);
            $lista = $lista_sql->fetchAll();//converte para lista php
            return $lista;
        }
    }

    class Produto{
        public $id;
        public $nome;
        public $preço;
        public $quantidade;
        public $categoria;
        public $descricao;
    }

    class Venda{
        public $id;
        public $id_cliente;
        public $id_produto;
        public $andamento;
    }

?>