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
       
      <?php 
include ("conexao.php");
$id=$_POST['$id'];
$nome= $_POST['nome'];

$sql= "DELETE FROM usuario WHERE id=$id";

if ($sql=mysqli_query($conexao, $sql)){
    echo" Excluido com sucesso",'danger';
}
else{
    echo"erro ",'';
}
?>

          </div>
      </div>
    </div>
  </div>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>