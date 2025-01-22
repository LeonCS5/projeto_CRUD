<?php
    //1° incluir o arquivo de conexao com o banco de dados
    include 'database.php';

    //2°construir uma variavel que ira receber o comando em SQL que sera executado
    $sql_listar = "SELECT * FROM cadastro_alunos" ;

    //3° declarar uma varivale que ira receber o resultado da funcao mysql_query
    //ao qual realiza a conexao com o banco de dados e executa o comando em sSQL
    $resultado = mysqli_query($conexao, $sql_listar);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cadastro Aluno</title>
    <link rel="stylesheet" href="/projeto_CRUD/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Alunos Cadastrados</h1>
    </div>

    <table class="table table-striped table-bordered table-hover">
            <!-- cabecalho de tabela -->
            <thead class="thead-dark">
                <!-- tr - table row - linha de tabela -->
                <tr>
                <!-- nome que sera exibido como indice da coluna -->
                    <th>Nome</th>
                    <th>E-Mail</th>
                    <th>Celular</th>
                    <th>CPF</th>
                    <th>Sala</th>
                    <th>Turno</th>
                    <th>Idade</th>
                    <th>Cor do Cabelo</th>
                    <th>Atualizar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        <!-- coropo da tabela -->
        <tbody>
            <?php while($dados = mysqli_fetch_array($resultado)): ?>
            <tr>
                <!-- td - tabela  data - campo para recener o valor -->
                <td><?php echo $dados['nome_aluno']; ?> </td>
                <td><?php echo $dados['email_aluno']; ?> </td>
                <td><?php echo $dados['celular_aluno']; ?> </td>
                <td><?php echo $dados['cpf_aluno']; ?> </td>
                <td><?php echo $dados['sala_aluno']; ?> </td>
                <td><?php echo $dados['turno_aluno']; ?> </td>
                <td><?php echo $dados['idade_aluno']; ?> </td>
                <td><?php echo $dados['cor_cabelo_aluno']; ?> </td>
                <td><a href="form_ atualizar_cadastro.php?id_aluno=<?php echo $dados['id']; ?>">Atualizar</a></td>
                <td><a href="excluir_cadastro.php?id_aluno=<?php echo $dados['id']; ?>">Excluir</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <br>
    <div class="btn btn-outline-primary">
    <a id="voltar" href="/projeto_CRUD/index.html">voltar</a>
    </div>


</body>
</html>