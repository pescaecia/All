<?php
include 'Autenticacao.php';
include '../Sql/Conexao.php';

$username = $_POST['login'];
$password = $_POST['senha'];

function Login($conector,$sql){
    $retorno = mysqli_query($conector, $sql);
    $resultado = mysqli_fetch_array($retorno);
    return $resultado;
}
$result = Login($conector, "SELECT * FROM administrador WHERE login = '$username' and senha ='$password'");
if ($result != NULL ){
    logar($result['login'], $result['id'],"A");
    header('Location: ../Redirecionar.php');
    die();
}
$result = Login($conector,"SELECT * FROM usuario WHERE login = '$username' AND senha = '$password'");
if($result != NULL){
    logar($result['login'],$result['id'],"U");
    header('Location: ../Redirecionar.php');
      die();
}
