<!DOCTYPE html>
<?php
$conexao = mysqli_connect ("localhost", "root", "");
mysqli_select_db($conexao, "meu_banco");
session_start();

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script language="Javascript">
        

    function sucesso(){
       setTimeout("window.location='login.html'", 4000);
    }
    function failed(){
        setTimeout("window.location='login.html'", 4000);
    }

    </script>
</head>
<body>
  <?php
  $user = $_POST ["user"];
  $pass = $_POST ["pass"];
 

  $consulta = mysqli_query ($conexao, "SELECT * FROM usuarios WHERE usuario = '$user' AND  senha = '$pass'")
  or die (mysqli_error($conexao));

  $linhas = mysqli_num_rows($consulta);

  if ($linhas ==0){
 
    echo " o login falhou. voce sera redirecionado para a pagina de login  em 4 segundos.";
    
    echo " <script language='javascript'>failed()</script>";

  } else {

$_SESSION ["usuario"] = $_POST ["user"];

$_SESSION ["senha"] = $_POST ["pass"]

echo"voce foi logado com sucesso. redirecionando em 4 segundos.";
echo"<script language='javascript'>sucesso()</script>.";

  }


 

  

?>

  

</body>
</html>