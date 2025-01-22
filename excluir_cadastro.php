<?php
     //1° PASSO INCLUIR O ARQUIVO DE CONEXAO COM O BANCO DE DADOS
    include "database.php";

    //2° PASSO - RESGATARO ID VIA GET ENVIADO PELO LINK CRIADO
    $id_aluno = $_GET['id_aluno'];

    //3°passo - construir uma string para realizar a consulta em SQL por id
    $sql_exclui_por_id = "DELETE FROM cadastro_alunos WHERE cadastro_alunos.id = '$id_aluno'";

    //echo "<h3>".$sql_exclui_por_id."</h3>";

    //4°passo - vamos realizar o mesmo procedimento realizado ao cadastrar uma informacao no banco de dados
    if(mysqli_query($conexao, $sql_exclui_por_id))
    {
        //vamos utilizar um comando para redirecionar para outra pagina
        header("location: listar_cadastro_alunos.php");
    }
    else{
        echo "erro ao excluir cadastro!";
    }
    