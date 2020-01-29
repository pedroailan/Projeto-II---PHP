<?php

    require "cadastro.model.php";
    require "cadastro.service.php";
    require "conexao.php";

    $cadastro = new cadastro();
    $cadastro->__set('tipo',  $_POST['Tipo']);

    $conexao = new Conexao();

    $cadastroService = new cadastroService($conexao, $cadastro);


    echo '<pre>';
    print_r($_POST);
    echo '<pre>';

?>