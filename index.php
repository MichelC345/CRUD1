<?php
session_start();
include 'anticache.php';
if (isset ($_GET ["deslogar"])) {unset ($_SESSION ['login']);
unset ($_SESSION ['senha']);}
if (isset ($_SESSION ['login']) && isset ($_SESSION ['senha'])) {header ("Location: paineldousuario.php");}
?>

<!DOCTYPE html>


<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página inicial</title>
<link rel="stylesheet" href ="style.css">

</head>

<body>

<main class="container">
    <h1>Login do usuário</h1>
    <?php 
    if (isset ($_SESSION ['msg'])) {
        echo $_SESSION ['msg'];
        unset ($_SESSION ['msg']);
    }

    if (isset ($_SESSION ['msglogin'])) {
        echo $_SESSION ['msglogin'];
        unset ($_SESSION ['msglogin']);
    }

    if (isset ($_SESSION ['msgdelete'])) {
        echo $_SESSION ['msgdelete'];
        unset ($_SESSION ['msgdelete']);
    }
    ?>
    <form action="processalogin.php" method="POST">
   
    <label>Usuário:</label>

    <input type="text" name="usuario" placeholder="Digite o seu usuário:"><br><br>


    <label>Senha:</label>

    <input type="password" name="senha" placeholder="Digite a sua senha:"><br><br>

    <input type="submit" value="Efetuar o login">

    
    </form>

    <form action="cadastro.php" method ="get">
 
    <input type="submit" value="Cadastrar-se">


    
    </form>
</main>
</body>




</html>