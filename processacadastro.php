<?php 
session_start();
include_once ("conexao.php");
include 'anticache.php';

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$usuario = filter_input (INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$cpf = filter_input (INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$sobrenome = filter_input (INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if (strlen ($nome) < 3 || strlen ($usuario) < 3 || strlen ($cpf) < 3 || strlen ($sobrenome) < 3 || strlen ($senha) < 3) {
    $_SESSION ['msg'] = "<p style='color:red'>Cada informação deve ter no mínimo 3 caracteres</p>";
    header ("Location: cadastro.php");
}else {

$resultado = "INSERT INTO infos (usuario, nome, sobrenome, senha, cpf, datadecadastro) VALUES ('$usuario', '$nome', '$sobrenome', '$senha','$cpf', NOW())";
$resultado_query = pg_query($conexao, $resultado);
if ($resultado_query) {$_SESSION ['msg'] = "<p style='color:green'>Cadastro realizado com sucesso!</p>";
    header ("Location: index.php");
}else {$_SESSION ['msg'] = "<p style='color:red'>Cadastro inválido.</p>" . pg_last_error();
    header ("Location: cadastro.php");}
}
pg_close($conexao);


?>