<?php
session_start ();
include_once ("conexao.php");
if (!(isset ($_SESSION ['login']) && isset ($_SESSION ['senha']))) {$_SESSION ['msglogin'] = "Sessão expirada";
    header ("Location: index.php");
}else {$_SESSION ['login'] = $_SESSION ['login'];
$_SESSION ['senha'] = $_SESSION ['senha'];}
?>

<!DOCTYPE html>

<html>

<head>
<title>Painel do Usuário</title>
<link rel="stylesheet" href ="style.css">
</head>

<body>
    <main class="container">
<h1>Seja bem-vindo ao painel do usuário!</h1>
<form action="informacoes.php" method="get">
<input type="submit" value ="Minhas informações";>
</form>

<form action="deletarconta.php" method="get">
<input type="submit" value ="Deletar a minha conta";>
</form>

<form action="index.php" method="get">
<input type="submit" value ="Encerrar sessão" name = "deslogar";>
</form>

    </main>



</body>

<?php pg_close($conexao);?>


</html>