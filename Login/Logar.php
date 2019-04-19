<?php
include './Autenticacao.php';
include '../Sql/Conexao.php';

ini_set("display_errors", true);

$username = $_POST['login'];
$password = $_POST['senha'];
function getLogin($conector,$sql){
    $retorno = mysqli_query($conector,$sql);
    $resultado = mysqli_fetch_array($retorno);
    return $resultado;
}
 
$result = getLogin($conector, "select * from administrador where login = '$username' and senha = '$password'");
echo $result;
if($result != Null){
    logar($result['username'], $result['id'], "A");
    header('Location: ../Redirecionar.php');
    die();
}
$result = getLogin($conector, "select * from usuario where login = '$username' and senha = '$password'");
echo $result;
if($result != Null){
    logar($result['username'], $result['id'], "U");
    header('Location: ../Redirecionar.php');
    die();
}