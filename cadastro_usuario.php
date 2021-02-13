<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, user-scaleble=no" />
    <title>Cadatro de Usuário | OpenStorage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilizar.css">
    <link rel="shortcut icon" href="favicon.ico" />
    <script src="https://kit.fontawesome.com/a922503613.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container cadUser">
      <form>
        <div class="form-group">
          <label for="">Nome do Usuário</label>
          <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
        </div>

        <div class="form-group">
          <label for="">E-mail</label>
          <input type="text" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu e-mail">
        </div>

        <div class="form-group">
          <label for="">Senha</label>
          <input type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
        </div>

        <div class="form-group">
          <label for="">Repetir Senha</label>
          <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir senha">
          <small>Precisa ser igual a senha digitada acima.</small>
        </div>

        <div class="form-group">
          <label>Nível de Acesso</label>
          <select name="nivelusuario" class="form-select">
              <option value="1">Administrador</option>
              <option value="2">Apoio</option>
              <option value="3">Consulta</option>
          </select>
        </div>

        <div class="form-cad bt">
          <button type="submit" class="btn btn-success" name="button">Cadastrar</button>
        </div>

      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>
