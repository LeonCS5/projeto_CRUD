<?php

    //arquivo de configuração de conexao ao banco de dados
    //
    $servidor = "localhost";
    $servidor_user = "root";
    $servidor_password = "";
    $database = "aula_crud";

    //declarar variavel para receber a funcao de conexao ao banco de dados
    $conexao = mysqli_connect($servidor,$servidor_user,$servidor_password,$database);

