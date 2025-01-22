<?php

//incluir o arquivo de conexao com o banco de dados
include("database.php");

    //recuperando as informacoes do formulario
    $nome_aluno         =$_POST['nome_aluno'];
    $email_aluno        =$_POST['email_aluno'];
    $celular_aluno      =$_POST['celular_aluno'];
    $cpf_aluno          =$_POST['cpf_aluno'];
    $sala_aluno         =$_POST['sala_aluno'];
    $turno_aluno        =$_POST['turno_aluno'];
    $idade_aluno        =$_POST['idade_aluno'];
    $cor_cabelo_aluno   =$_POST['cor_cabelo_aluno'];

    $sql = "INSERT INTO cadastro_alunos (nome_aluno, email_aluno, celular_aluno, cpf_aluno, sala_aluno, turno_aluno, idade_aluno, cor_cabelo_aluno)
            VALUES ('$nome_aluno', '$email_aluno', '$celular_aluno','$cpf_aluno','$sala_aluno','$turno_aluno','$idade_aluno','$cor_cabelo_aluno')";


//valores no banco de dados
//utilizando a funcao mysql_query
    if (mysqli_query($conexao,$sql))
    {
        echo"Cadastrado realizado com Sucesso";
    }
    else {
        echo "Erro ao Cadastrar";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIADO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<br>
    <div class="btn btn-outline-primary">
    <a id="voltar" href="/projeto_CRUD/index.html">voltar</a>
    </div>
</body>
</html>