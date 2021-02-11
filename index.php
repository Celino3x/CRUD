<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Menu Inicial | Estoque OpenStorage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container indexmenu">
          <div class="row">

            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Adicionar Produto</h5>
                  <p class="card-text">Opção para incluir novos produtos em nosso estoque.</p>
                  <a href="adicionar.php" class="btn btn-primary"><i class="fas fa-box-open"></i>&nbsp;Cadastrar Produto</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Lista de Produtos</h5>
                  <p class="card-text">Visualizar, editar e excluir os produtos.</p>
                  <a href="listar.php" class="btn btn-primary"><i class="fas fa-list-ul"></i>&nbsp;Listar Produtos</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 quad-index">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Adicionar Categoria</h5>
                  <p class="card-text">Opção para incluir novas categorias.</p>
                  <a href="adicionar_categoria.php" class="btn btn-primary"><i class="fas fa-layer-group"></i>&nbsp;Cadastrar Categoria</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 quad-index">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Adicionar Fornecedor</h5>
                  <p class="card-text">Opção para incluir novos fornecedores.</p>
                  <a href="adicionar_fornecedor.php" class="btn btn-primary"><i class="fas fa-people-carry"></i>&nbsp;Cadastrar Fornecedor</a>
                </div>
              </div>
            </div>

          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
