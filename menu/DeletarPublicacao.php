<?php

        include '../Sql/Conexao.php';
        
        $id = $_GET['id'];
    
        
    $delete = "delete from publicacaoAdm where id='$id'";
    
    if (mysqli_query($conector, $delete)){
 
         echo ("<script>
                 window.alert('Publicação Deletada')
                 window.location.href='../Main';
             </script>");
           
    } else {
      

("<script>
                 window.alert('Erro no Deletamento')
                 window.location.href='../Main';
             </script>");
    }