<?php
//requisita a pagina indicada uma vez e FORÇA A PUXA OS NEGOCIO DA PAGINA, no caso é o session_start().
require_once '../Login/Autenticacao.php';
require_once '../Sql/Conexao.php';

$id = $_SESSION['id'];
//seleciona tudo do usuario onde o ID for igual o da seção
$query = "SELECT * FROM usuario WHERE id = $_SESSION[id]";
mysqli_query($conector, $query);



?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Pesca inicial</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/All/css/estilo.css">

    </head>
    <body>

        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <div id="imagem">
                        <img src="">
                    </div>
                    <h3 id="nome"><?= $_SESSION['login'] ?></h3>
                    <h3 id="lvl">Lvl: big boss</h3>
                </div>
                <ul class="list-unstyled components">
                    <li>
                        <a href="#">Forum</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu">Amizades Virtuais</a>
                    </li>
                    <li>
                        <a href="#">E dando dicas</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>

            </nav>

            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                    </div>
                    
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/All/Login/logout.php">Sair</a>
                                </li>
                            </ul>
                        </div>
                </nav>
                <div>
                    <form method="post" action="insertPublicacao.php" enctype="multipart/form-data">  
                        <div class="col-sm-9">
                            
                            <label>Titulo:</label>
                            <input type="text" name="titulo" class="form-control">
                        </div>
                        </br>
                        <div class="col-sm-10">
                            <label>Conteudo: </label>
                            <textarea class="form-control textoarea" name="conteudo" rows="12"></textarea>
                        </div>
                        </br>
                        <div class="col-sm-10 botao">
                        <button type="file" class="btn btn-dark">Confirmar</button>
                        </div>
                    </form>
                </div>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

               






        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

    </div>
</html>