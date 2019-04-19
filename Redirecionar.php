<?php
include './Login/Autenticacao.php';

    IF(isMyType('A')){
        header("Location: menu/menuAdm.php");
    }
    IF(isMyType('U')){
        echo "Vinizo gado";
    }
    