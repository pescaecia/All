<?php
 require_once "../Login/Autenticacao.php";
 require_once "../Sql/Conexao.php";
 
 $titulo = $_POST["titulo"];
 $conteudo = $_POST["conteudo"];
 //a forma que se pega os uploads, tipo o post. imagem é o treco do formulario, e nome é tipo um nome temporario etc
 $img = $_FILES["imagem"]["name"];
 $id = $_SESSION["id"];
 
 
 //UP = upload
 $_UP["pasta"] = "../img/";
 $_UP["tamanho"] = 1024*1024*100;
 $_UP["extensoes"] = array('png','jpg', 'jpeg', 'gif');
 $_UP['erros'][0] = 'Não houve erro';
 $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
 $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
 $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
 $_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
 if($_FILES["imagem"]["error"] !== 0){
     die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
 }
 
 $extensao = (strtolower(end(explode('.', $_FILES['imagem']['name']))));
if (array_search($extensao, $_UP['extensoes']) === FALSE) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/All/Publicacao/publicacaoAdm.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extensão inválida.\");
					</script>";
}

else if ($_UP['tamanho'] < $_FILES['imagem']['size']) {
    echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/All/Publicacao/publicacaoAdm.php'>
        <script type=\"text/javascript\">  alert(\"Arquivo muito grande.\"); </script>";
}

else {
   $nome_final = "" . time() . $extensao; 


if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $nome_final)) {
    mysqli_query($conector,"insert into publicacaoAdm values('$id', default, '$titulo', '$conteudo', '$img')");
    
    //echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/All/Publicacao/publicacaoAdm.php'>";
    
}

else {
    echo "<script> alert('Lixo humano 01');</script>";
}
}