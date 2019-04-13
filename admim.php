<?php

include "sql/Conexao.php";
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$rubenz = ("inset into administrador values(default, '$nome', '$senha')");

    
