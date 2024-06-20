<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Login</h1>
        <!-- na primeira linha usaremos o “action=ope.php” para que o formulário repasse
        as informações para a página ope.php -->
<form method="post" action="ope.php" id="formlogin" name="formlogin" >
<fieldset id="fie">

<label>Nome </label>
<!-- o campo “name” dentro do input e importante,
// pois será ele que armazenará os dados digitados -->
<input class="form-control mr-sm-2" type="text" name="login" id="login"><br >
<label class="form-label">Senha</label>
<input class="form-control mr-sm-2"  type="password" name="senha" id="senha" /><br >
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logar</button>
</fieldset>
</form>
      </div>
    </div>
  </div>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>