<?php
 require_once "../Login/Autenticacao.php";
 require_once "../Sql/Conexao.php";
 
 $titulo = $_POST["titulo"];
 $conteudo = $_POST["conteudo"];
 $img;
 $id = session_id();
 $querry = "insert into publicacaoAdm values($id, default, '$titulo', '$conteudo')";
            //variavel de conecção, e o conector....
 mysql_query($conector, $querry);
 echo $querry;