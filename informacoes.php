<?php
session_start();
include_once ("conexao.php");
if (!(isset ($_SESSION ['login']) && isset ($_SESSION ['senha']))) {$_SESSION ['msglogin'] = "Sessão expirada";
    header ("Location: index.php");
}else {
    $usuario = $_SESSION['login'];
    $senha = $_SESSION['senha'];
    $busca = "SELECT * FROM infos WHERE usuario='$usuario' AND senha='$senha'";
    $resultado = pg_query ($conexao, $busca);
    while ($cont = pg_fetch_assoc ($resultado)) {
        $cpf = $cont ['cpf'];
        $sobrenome = $cont ['sobrenome'];
        $datadecadastro = $cont ['datadecadastro'];
        $nome = $cont ['nome'];

    }
    

}
?>

<!DOCTYPE html>
<html lang ="pt-br">
<head>
<meta charset="utf-8">
<title>Minhas informações</title>
<link rel="stylesheet" href ="style.css">
</head>

<body>
    <main class="container">
    <h1>Minhas informações:</h1>
    <?php 
    if (isset ($_SESSION ['msg'])) {
        echo $_SESSION ['msg'];
        unset ($_SESSION ['msg']);

    } 
    
        echo "<br>Nome: " . $nome; 
        echo "<br>Sobrenome: " . $sobrenome;
        echo "<br>Usuário: " . $usuario;
        echo "<br>Senha: " . $senha;
        echo "<br>CPF: " . $cpf;
        echo "<br>Data de cadastro: " . $datadecadastro;
    
    ?>
</main>
</body>


<?php pg_close ($conexao); ?>


</html>

