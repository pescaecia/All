<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Pesca inicial</title>
        <link rel="stylesheet" type="text/css" href="EstiloEtc.css">
        <?php
    require_once 'Sql/Conexao.php';
     require_once 'Login/Autenticacao.php';

        if (estaLogado()) {
            If (isMyType('A')) {
                include 'menu/menuAdm.php';
            }
                     IF (isMyType('U')) {
            echo "Vinizo gado";
        }
        }Else{
            echo 'conectar';
            
            
        }
        
    