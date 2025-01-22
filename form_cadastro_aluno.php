<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Formulário de Cadastro de Alunos</h3>
        <form action="cadastro_aluno.php" method="post" id="meuID" class="border p-4 rounded shadow-sm">

            <div class="form-group">
                <label for="nome_aluno">Nome:</label>
                <input type="text"      name="nome_aluno"       id="nome_aluno"         class="form-control" placeholder="Informe seu nome">
            </div>

            <div class="form-group">
                <label for="email_aluno">E-Mail:</label>
                <input type="email"     name="email_aluno"      id="email_aluno"        class="form-control" placeholder="Informe seu e-mail">
            </div>

            <div class="form-group">
                <label for="celular_aluno">Celular:</label>
                <input type="number"      name="celular_aluno"    id="celular_aluno"      class="form-control" placeholder="Informe seu celular">
            </div>

            <div class="form-group">
                <label for="cpf_aluno">CPF:</label>
                <input type="number"      name="cpf_aluno"        id="cpf_aluno"          class="form-control" placeholder="Coloque seu CPF">
            </div>

            <div class="form-group">
            <label for="sala_aluno">Sala:</label>
                <select                 name="sala_aluno"      id="sala_aluno"        class="form-control">
                    <option value="">ESCOLHA A SUA SALA</option>
                    <option value="1">SALA: 1</option>
                    <option value="2">SALA: 2</option>
                    <option value="3">SALA: 3</option>
                    <option value="4">SALA: 4</option>
                    <option value="5">SALA: 5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="turno_aluno">Turno:</label>
                <select                 name="turno_aluno"      id="turno_aluno"        class="form-control">
                    <option value="">ESCOLHA O SEU PERÍODO</option>
                    <option value="matutino">Matutino (período da manhã)</option>
                    <option value="vespertino">Vespertino (período da tarde)</option>
                    <option value="noturno">Noturno (período da noite)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="idade_aluno">Idade:</label>
                <input type="number"      name="idade_aluno"      id="idade_aluno"        class="form-control" placeholder="Coloque sua idade">
            </div>

            <div class="form-group">
                <label for="cor_cabelo_aluno">Cor do Cabelo:</label>
                <select name="cor_cabelo_aluno" id="cor_cabelo_aluno" class="form-control">
                    <option value="">Escolha a Cor do Cabelo</option>
                    <option value="Preto">Preto</option>
                    <option value="Castanho Escuro">Castanho Escuro</option>
                    <option value="Castanho Claro">Castanho Claro</option>
                    <option value="Loiro Escuro">Loiro Escuro</option>
                    <option value="Loiro Claro">Loiro Claro</option>
                    <option value="Loiro Platinado">Loiro Platinado</option>
                    <option value="Ruivo">Ruivo</option>
                    <option value="Ruivo Claro">Ruivo Claro</option>
                    <option value="Ruivo Escuro">Ruivo Escuro</option>
                    <option value="Grisalho">Grisalho</option>
                    <option value="Branco">Branco</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Azul">Azul</option>
                    <option value="Verde">Verde</option>
                    <option value="Rosa">Rosa</option>
                    <option value="Vermelho">Vermelho</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Colorido">Colorido</option>
                    <option value="Castanho Acinzentado">Castanho Acinzentado</option>
                    <option value="Castanho Avermelhado">Castanho Avermelhado</option>
                    <option value="Loiro Dourado">Loiro Dourado</option>
                    <option value="Loiro Miele">Loiro Miele</option>
                    <option value="Loiro Beige">Loiro Beige</option>
                    <option value="Bege">Bege</option>
                    <option value="Branco Acinzentado">Branco Acinzentado</option>
                    <option value="Preto Azulado">Preto Azulado</option>
                    <option value="Preto Acinzentado">Preto Acinzentado</option>
                    <option value="Rosa Claro">Rosa Claro</option>
                    <option value="Vermelho Vivo">Vermelho Vivo</option>
                    <option value="Vermelho Escuro">Vermelho Escuro</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Bege Claro">Bege Claro</option>
                    <option value="Pêssego">Pêssego</option>
                    <option value="Lavanda">Lavanda</option>
                    <option value="Turquesa">Turquesa</option>
                    <option value="Preto Fosco">Preto Fosco</option>
                </select>
            </div>

            <div class="form-group text-center mt-4">
                <input type="submit" value="Cadastrar" class="btn btn-primary">
            </div>
        </form>
    </div>
<br>
    <div class="btn btn-outline-primary">
    <a id="voltar" href="/projeto_CRUD/index.html">voltar</a>
    </div>
</body>
</html>