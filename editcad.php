<?php 
include ("conexao.php");
$id= $_POST['id'];
$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= password_hash($_POST['senha'],PASSWORD_DEFAULT);


$sql = "UPDATE usuario set nome = '$nome' , email = '$email', senha = '$senha'
WHERE id = $id";//atualiza na tabela usuario pegando as colunas do bd que recebe as variaveis onde  o id  recebe a varivel id
//WHERE id = $id parte essencial dessa linha de código se não tiver todos cadastros são alterados 
if ($conexao=mysqli_query($conexao, $sql)){
    echo"alterado com sucesso";
}
else{
    echo"erro ao se cadastrar com o banco".mysqli_connect_error($conexao);
}
?>