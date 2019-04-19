<?php
include 'Autenticacao.php';
include '../Sql/Conexao.php';

$username = $_POST['login'];
$password = $_POST['senha'];

function Login($conexao,$sql){
    $retorno = mysqli_query($conexao, $sql);
    $resultado = mysqli_fetch_array($retorno);
    return $resultado;
}
$result = Login($conexao, "SELECT login,senha FROM administrador WHERE login = '$login' and senha ='$password'");
if ($result != NULL ){
    logar($result['username'], $result['id'],"A");
    header('Location: ../Redirecionar.php');
}
$result = Login($conexao,"SELECT login,senha FROM usuario WHERE login = '$login' AND senha = '$senha'");
if($result != NULL){
    logar($result['username'],$result['id'],"U");
    header('Location: ../Redirecionar.php');
}
