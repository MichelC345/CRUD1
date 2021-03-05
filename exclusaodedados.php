<?php 
session_start ();
include_once ("conexao.php");
include 'anticache.php';
if (!(isset ($_SESSION ['login']) && isset ($_SESSION ['senha']))) {$_SESSION ['msglogin'] = "Sessão expirada";
    header ("Location: index.php");
}else {
    $login = $_SESSION ['login'];
    $senha = $_SESSION ['senha'];
}
$senhainserida = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if ($senhainserida != $senha) {$_SESSION ['msgdelete'] = "<p style='color:red'>Senha inválida</p>";
header ("Location: deletarconta.php");
}else {
    $operacao = "DELETE FROM infos WHERE usuario = '$login' AND senha = '$senha'";
    if (pg_query($conexao, $operacao)) {$_SESSION ['msgdelete'] = "Conta deletada com sucesso.";
    header ("Location: index.php");
    unset ($_SESSION ['login']);
    unset ($_SESSION ['senha']);
}

}

?>