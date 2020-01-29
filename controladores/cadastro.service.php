<?php

    //classe para intermediar a gravação do cadastro do BD
    //CRUD
    class cadastroService{

        private $conexao;
        private $cadastro;

        public function __construct(Conexao $conexao, cadastro $cadastro) {
            $this->conexao = $conexao;
            $this->cadastro = $cadastro;
        }

        public function inserir(){

        }

        public function recuperar(){

        }

        public function atualizar(){

        }

        public function remover(){

        }
    }
?>