<?php 
session_start ();
include_once ("conexao.php");
if (!(isset ($_SESSION ['login']) && isset ($_SESSION ['senha']))) {$_SESSION ['msglogin'] = "Sessão expirada";
    header ("Location: index.php");
}else {
    $_SESSION ['login'] = $_SESSION ['login'];
    $_SESSION ['senha'] = $_SESSION ['senha'];

}
?>

<!DOCTYPE html>

<html>

<head> 
    <main class="container">
<title>Deletar conta</title>
<link rel="stylesheet" href ="style.css">
</head>

<body>
<?php if (isset ($_SESSION ['msgdelete'])) {
        echo $_SESSION ['msgdelete'];
        unset ($_SESSION ['msgdelete']);
    } ?>
<label>Senha: </label>
<form action="exclusaodedados.php" method="post">
<input type="password" name="senha" placeholder="Insira a sua senha para prosseguir.">
<input type="submit" value="Deletar conta">
</form>
<?php 

?>
</main>
</body>

</html>