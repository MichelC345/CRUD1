<?php
session_start();
include 'anticache.php';
?>

<!DOCTYPE html>

<html>
<meta charset = "utf-8">
<head>
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href ="style.css">
</head>

<body>
    <main class="container">
<h1>Cadastro de usuário</h1>
<?php
if (isset ($_SESSION ['msg'])) {
    echo $_SESSION['msg'];
    unset ($_SESSION['msg']);
}


?>
    <form action = "processacadastro.php" method = "POST">
    <label>Nome: </label>
    <input type="text" name="nome" placeholder="Digite o seu nome:"><br><br>

    <label>Sobrenome: </label>
    <input type="text" name="sobrenome" placeholder="Digite o seu sobrenome:"><br><br>

    <label>Usuário: </label>
    <input type="text" name="usuario" placeholder="Digite o seu Usuário:"><br><br>

    <label>Senha: </label>
    <input type="password" name="senha" placeholder="Digite a sua senha:"><br><br>

    <label>CPF: </label>
    <input type="text" name="cpf" placeholder="Digite o seu CPF:"><br><br>

    <input type="submit" value ="Efetuar o cadastro">
    </form>

</main>
</body>





</html>