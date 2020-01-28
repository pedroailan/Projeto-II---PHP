<?php
    //clase de do tipo de dado que será trabalhado dentro da aplicação
    class cadastro {
        private $tipo;
        private $quantidade;
        private $data_cadastro;
    }

    public function  __get($atributo)
        return $this->$atributo;

    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
?>