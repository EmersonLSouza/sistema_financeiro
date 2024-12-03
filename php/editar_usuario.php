
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se - Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
include 'conexao.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
$result = $conexao ->query($sql);
$row = $result->fetch_assoc();

echo $row['nome'];
?>

    <div class="container text-center">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img_cad" src="img/8793251_4002858.svg" alt="" srcset="">
          </div>
          <div class="col-sm-12 col-md-4" style="margin-top: 12%;">
            <i class="fa-solid fa-user"></i>
            <h1>Cadastre-se no Website</h1>

            <form action="php/atualizar_usuario.php" method="post">
                <div class="mb-3">
                  <label for="nome" class="form-label"> Nome de Usuário</label>
                  <input type="varchar" value="<?php $row ['nome']; ?>" class="form-control" id="nome" name="nome" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label"> Endereço de Email</label>
                  <input type="email" value="<?php $row ['nome']; ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                
                <div class="mb-3">
                  <label for="cargo" class="form-label"> Cargo</label>
                  <input type="text" value="<?php $row ['nome']; ?>" class="form-control" id="cargo" name="cargo" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>

                <button type="submit" class="btn btn-primary">Atualizar Dados</button>
              </form>
          </div>
          <div class="col-sm-12 col-md-4">
            
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>
