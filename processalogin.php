<?php
session_start();
include_once ("conexao.php");
include 'anticache.php';
$usuario = filter_input (INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
?>

<!DOCTYPE html>
<html lang ="pt-br">
<head>
<meta charset="utf-8">
<title>Sua conta</title>
</head>

<?php 
$busca = "SELECT * FROM infos WHERE usuario='$usuario'";
$resultado = pg_query ($conexao, $busca);
$cont = pg_num_rows($resultado);
if (!($cont)) {header ("Location: index.php");
    $_SESSION ['msglogin'] = "<p style='color:red'>Login inválido.</p>";
}else {$_SESSION ['login'] = $usuario;
       $_SESSION ['senha'] = $senha;

    
    header ("Location: paineldousuario.php");}

?>

<?php pg_close ($conexao); ?>


</html>

