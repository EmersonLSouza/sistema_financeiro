<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria - Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container text-center">
      <div style="color: white">
      <?php
    include 'php/conexao.php';
    session_start();
    if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
    $query = $conexao->query($sql);
    $resultado = $query->fetch_assoc();
    echo  "Olá ". $resultado['nome']."! ";
    }else{
        echo "<script> alert('Você não está logado!'); history.back(); </script>"; 
    }
    ?>
    <a class="btn btn-outline-info" href="php/logout.php" role="button">Sair</a>
  </div>

        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img_cad" src="img/vetor 2.svg" alt="" srcset="">
          </div>
          <div class="col-sm-12 col-md-4" style="margin-top: 16%;">
            <i class="fa-solid fa-user"></i>
            <h1>Categoria</h1>
            <form action="php/insert_categoria.php" method="post">
                <div class="mb-3">
                  <label for="nome" class="form-label"> Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="descricao" class="form-label"> Descrição</label>
                  <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="categoria" class="form-label"> Tipo de Categoria</label>
                  <input type="number" name="categoria" class="form-control" id="categoria" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </form>
          </div>
          <div class="col-sm-12 col-md-4">
            
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>