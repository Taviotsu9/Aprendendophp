<!DOCTYPE html>
<?php
 $conexao = mysqli_connect ("localhost","root", "");
 mysqli_select_db ($conexao, "meu_banco");
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
 <?php
$nome = $_POST ["nome"];
$user = $_POST ["user"];
$pass = $_POST ["pass"];

$inserir = "INSERT INTO usuarios (id, nome, usuario, senha) VALUES (NULL, '$nome', '$user', '$pass');";

mysqli_query ($conexao, $inserir) or die (mysqli_error ($conexao));
echo"voce foi cadastrado com sucesso. Clique <a href='login.html'>aqui</a> para fazer log-in.";
?>


</body>
</html>