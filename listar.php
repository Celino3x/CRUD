<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="container lisProd">

      <div class="list-back">
        <a href="menu.php" id="bt-back" role="button" class="btn bt btn-primary">Voltar</a>
      </div>

      <h3>Lista de Produtos</h3>

          <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">№</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Fornecedor</th>
                  <th scope="col">Ação</th>
                </tr>
              </thead>

                <tr>
                  <?php
                  include 'conexao.php';
                  $sql = "SELECT * FROM `estoque`";
                  $busca = mysqli_query($conexao, $sql);

                  while ($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array['id_estoque'];
                    $numeroproduto = $array['numeroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                  ?>
                <tbody>
                <tr>
                  <td><?php echo $numeroproduto ?></td>

                  <td><?php echo $nomeproduto ?></td>

                  <td><?php echo $categoria ?></td>

                  <td><?php echo $quantidade ?></td>

                  <td><?php echo $fornecedor ?></td>

                  <td>
                    <a class="btn btn-warning btn-sm btedit" href="editarprod.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>Editar</a>
                    <a class="btn btn-danger btn-sm btedit" href="deleteprod.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
                  </td>
                </tr>

                </tbody>

                  <?php
                  }
                   ?>
                </tr>

          </table>

    </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
