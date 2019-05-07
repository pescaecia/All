<?php
include 'Autenticacao.php';
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
if($result != Null){
    logar($result['login'], $result['id'], "A");
    header('Location: ../Main');
    die();
}
$result = getLogin($conector, "select * from usuario where login = '$username' and senha = '$password'");
if($result != Null){
    logar($result['login'], $result['id'], "U");
    header('Location: ../Main');
    die();
}
  $result = getLogin($conector, "select * from administrador where login = '$username' and senha = '$password'");
    if ($result == Null) {
      
    echo("<script type='text/javascript'> alert('Usuario e/ou senha incorretos !!!'
            ); location.href='../index.php';</script>");
    }
      $result = getLogin($conector, "select * from usuario where login = '$username' and senha = '$password'");
    if ($result == Null) {
      
    echo("<script type='text/javascript'> alert('Usuario e/ou senha incorretos !!!'
            ); location.href='../index.php';</script>");
    }