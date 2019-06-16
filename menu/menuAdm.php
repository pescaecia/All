<?php

$id = $_SESSION['id'];
//seleciona tudo do usuario onde o ID for igual o da seção
$query = "SELECT * FROM usuario WHERE id = $_SESSION[id]";
mysqli_query($conector, $query);

    include 'Sql/Conexao.php';
    
    $select = 'select * from publicacaoAdm';
    $query = mysqli_query($conector, $select);
?>
<link rel="stylesheet" type="text/css" href="http://localhost/All/css/estilo.css">
    
    
    

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
                        <a href="http://localhost/All/menu/inicioAdm">Inicio</a>
                    </li>
                    <li>
                        <a href="http://localhost/All/Publicacao/publicacaoAdm?acao=inserir&id=">Publicação</a>
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
                </nav>
                  <?php
                    while($tabela = mysqli_fetch_array($query)){
                        $id = $tabela['id'];
                        $titulo = $tabela['titulo'];
                        $conteudo = $tabela['conteudo'];
                        $img = $tabela['img'];
               
                        echo "<div class='container bg-light shadow rounded publicacao my-5'>"
                            ."<div class='row p-3'>"
                                ."<div class='col'>"
                                //começa os trecos 
                                ."<div class'dropdown'>"
                                ."<button class='btn btn-dark dropdown-toggle d-flex float-right' data-toggle='dropdown' type='button'>"
                                ."<i class='fa fa-bars'></i>"
                                ."</button>"
                                ."<div class='dropdown-menu'>"
                                ."<a href='menu/DeletarPublicacao-$id' class='dropdown-item'>Deletar</a>"
                                ."<a href='http://localhost/All/Publicacao/publicacaoAdm?acao=alterar&id=$id' class='dropdown-item'>Alterar</a>"
                                . "</div>"
                                . "</div>"
                                    ."<div class='row p-2'>"
                                        ."<div class='col shadow-sm rounded'>"
                                            ."$titulo"
                                        ."</div>"
                                    ."</div>"
                                    ."<div class='row p-2'>"
                                       ."<div class='col shadow-sm rounded'>"
                                            ."$conteudo"
                                        ."</div>"
                                    ."</div>"
                                    ."<div class='row p-2'>"
                                        ."<div class='col d-flex justify-content-center'>"
                                            ."<img class='img-fluid img-thumbnail' src='img/$img'>"
                                        ."</div>"
                                    ."</div>"
                                //termina os trecos
                                    ."<div class='row'>"
                                        ."<div class='col border border-dark'>"
                                //Envolvedor dos comentarios
                                            ."<div class='row'>"
                                            ."<div class='col border border-dark'>"
                                //envolve o comentario em si
                                                ."<div class='col border border-dark'>"
                                                ."</div>"
                                //a
                                                ."<div class='col'>"
                                                ."</div>"
                                //a
                                                ."<div class='col'>"
                                                ."</div>"
                                //a
                                    ."<div class='row'>"
                                    ."<div class='col'>"
                                        ."<form methor='post'>"
                                        ."<textarea class='form-control textoarea' name='conteudo' rows='4'></textarea>"
                                        . "</form>"
                                    ."</div>"
                                    ."</div>"        
                                            ."</div>"
                                            ."</div>"
                                
                                        ."</div>"
                                    ."</div>"
                                ."</div>"
                            ."</div>"
                        ."</div>";
                    }
                ?>
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


