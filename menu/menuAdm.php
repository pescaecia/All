<?php

$id = $_SESSION['id'];
//seleciona tudo do usuario onde o ID for igual o da seção
$query = "SELECT * FROM usuario WHERE id = $_SESSION[id]";
mysqli_query($conector, $query);

?>
<link rel="stylesheet" type="text/css" href="EstiloEtc.css">
    
    
    

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
                        <a href="#">Inicio</a>
                    </li>
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
                    <li>
                        <a href="http://localhost/All/publicacao/publicacaoAdm.php">Publicar</a>
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
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://localhost/All/Login/logout.php">Sair</a>
                                </li>
                            </ul>
                        </div>
                    </div>


            </div>
        </div>
    </div>
        </div>
                </nav>
                
                        </div>
                    </div>





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
        
</html>
<?php


