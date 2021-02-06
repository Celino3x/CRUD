<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
  </head>
  <body>
    <div id="tm_cont" class="container">
        <form action="_inserir_produto.php" method="post">
            <div class="mb-3">
              <label>Número do Produto</label>
                <input type="number" class="form-control" name="numeroproduto" placeholder="insira o número do produto" required autocomplete="off">
            </div>
            <div class="mb-3">
              <label>Nome do Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto" required autocomplete="off">
            </div>

              <select class="form-select" name="categoria">
                <option selected>Categoria</option>
                <option value="1">Periféricos</option>
                <option value="2">Hardware</option>
                <option value="3">Software</option>
                <option value="4">Smartphones</option>
              </select>

            <div class="mb-3">
              <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="insira a quantidade" required autocomplete="off">
            </div>

            <select class="form-select" name="fornecedor">
              <option selected>Fornecedor</option>
              <option value="1">Fornecedor A</option>
              <option value="2">Fornecedor B</option>
              <option value="3">Fornecedor C</option>
            </select>

            <div class="bt-cad">
              <button type="submit" id="bt-cad" class="btn bt" name="button">Cadastrar</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
