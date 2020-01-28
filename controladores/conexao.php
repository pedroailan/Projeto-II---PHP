<?php

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'db_equipamentos';
        private $user = 'root';
        private $pass = '';
    }

    public function conct() 
    {
        try{
            //instância de objeto nativo, devido ao uso do PDo
            $conexao = new PDO(
                "mysql:host=$sthis->host;dbname=$this->dbname", //DSN
                "$this->user",
                "$this->pass"
            );
        } catch(PDOException $c){
            echo '<p>'.$c->getMessage(). '<p>';
        }
    }

    ?>