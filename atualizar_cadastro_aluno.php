<?php
//incluir o arquivo de conexao com o banco de dados
include("database.php");
    //recuperando as informacoes do formulario
    $id_aluno           =$_POST['id_aluno'];
    $nome_aluno         =$_POST['nome_aluno'];
    $email_aluno        =$_POST['email_aluno'];
    $celular_aluno      =$_POST['celular_aluno'];
    $cpf_aluno          =$_POST['cpf_aluno'];
    $sala_aluno         =$_POST['sala_aluno'];
    $turno_aluno        =$_POST['turno_aluno'];
    $idade_aluno        =$_POST['idade_aluno'];
    $cor_cabelo_aluno   =$_POST['cor_cabelo_aluno'];

    //construir uma string em comando em SQL

$sql_update = "UPDATE  cadastro_alunos
                    SET nome_aluno          ='$nome_aluno',
                            email_aluno     ='$email_aluno',
                            celular_aluno   ='$celular_aluno',
                            cpf_aluno       ='$cpf_aluno',
                            sala_aluno      ='$sala_aluno',
                            turno_aluno     ='$turno_aluno',
                            idade_aluno     ='$idade_aluno',
                            cor_cabelo_aluno='$cor_cabelo_aluno' 
                WHERE cadastro_alunos.id = '$id_aluno'";
    
 //valores no banco de dados
 //utilizando a funcao mysql_query
    if (mysqli_query($conexao,$sql_update))
    {
        header("location: listar_cadastro_alunos.php ");
    }
    else {
        echo "Erro ao Cadastrar";
    }
