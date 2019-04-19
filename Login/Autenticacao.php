<?php

session_start();

function logar ($login, $senha){
    $_SESSION["login"] = $login;
    $_SESSION["senha"] = $senha;
    iniciarTempoSessao();
}

function deslogar(){
    session_destroy();
}

function sessãoExpirada(){
    if ($_SESSION["tempo"] < time()) {
        return true;
    } else {
        // reiniciar sessao
        iniciarTempoSessao();
        return false;
    }
}

function autenticar() {
    //se NAO estaLogado ou sessaoExpirada
    if (!estaLogado() || sessaoExpirada()) {
        deslogar();
        header('Location: ../index.php');
    } else {
        return true;
    }
}

function estaLogado() {
    return isset($_SESSION['login']);
}

function exibirUsername() {
    return $_SESSION['login'];
}

function iniciarTempoSessao(){
    $_SESSION["tempo"] = time();
}
