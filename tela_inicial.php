<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    </head>
<body>

    <div class="container text-center text-bs-body-color" style="margin-top: 10%;">
    <a class="btn btn-outline-info" href="php/logout.php" role="button">Sair</a>
    <h1 id="TELA"><?php
    include 'php/conexao.php';
    session_start();
    if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
    $query = $conexao->query($sql);
    $resultado = $query->fetch_assoc();
    echo $resultado['nome']."! ";
    }else{
        echo "<script> alert('Você não está logado!'); history.back(); </script>"; 
    }
    ?>Seja Bem-Vindo ao Sistema de Lançamentos</h1>

        <p>Selecione o Cadastro</p>
    </div>
    <div style="display: flex; flex-direction: column; align-items:center; gap: 20px; margin-top: 50px;">
    <a href="categoria.php" class="btn btn-success">Categoria</a>
    <a href="lançamento.php" class="btn btn-success">Lançamento</a>
    <a href="listar_usuarios.php" class="btn btn-success">Usuários</a>
    </div>


</body>