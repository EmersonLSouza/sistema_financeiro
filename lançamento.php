<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lançamento - Sistema Financeiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>

  <div>
  <a class="btn btn-outline-info" href="php/logout.php" role="button">Sair</a>
  </div>
    <div class="container text-center">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <img class="img_cad" src="" alt="" srcset="">
          </div>
          <div class="col-sm-12 col-md-4" style="margin-top: 16%;">
            <i class="fa-solid fa-user"></i>
            <h1>Lançamento</h1>
            <form action="php/logon.php" method="post">
                <div class="mb-3">
                  <label for="lançamento" class="form-label"> Data de Lançamento</label>
                  <input type="date" class="form-control" id="lançamento" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="lançamento" class="form-label"> Descrição de Lançamento</label>
                  <input type="varchar" class="form-control" id="lançamento" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="categoria" class="form-label">Categoria</label>
                  <input type="text" class="form-control" id="categoria" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastre-se</button>
              </form>
          </div>
          <div class="col-sm-12 col-md-4">
            
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>