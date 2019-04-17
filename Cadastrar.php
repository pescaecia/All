<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Pesca inicial</title>
        <link rel="stylesheet" type="text/css" href="EstiloEtc.css">

    </head>
    <body>
        

        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><a href="index.php">Inicio</a></h3>
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
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="Cadastrar.php">Cadastrar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLoginForm">
    Login
</button>

        <div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="logar/logar.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="login" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Senha</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-success">Login</button>
 
                            <a class="btn btn-link" href="">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
               
                
                        </div>
                    </div>
              
            </div>
        </div><!-- /.modal-content -->
                </nav>
  
 <div class="container">
        <div class="row">
            <div class="span12" style="text-align:center; margin: 0 auto;">
                <form class="form-horizontal" style="width: 400px; margin: 0 auto;" method="post" action="/form/">
                    <fieldset>
                        <legend>Please login</legend>
                        <div class="control-group">
                            <label class="control-label" for="id_username">Username</label>
                            <div class="controls">
                                <input name="username" maxlength="100" placeholder="Enter your username..." type="text" class="input-large" id="id_username" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="id_password">Password</label>
                            <div class="controls">
                                <input name="password" maxlength="100" placeholder="Enter your password..." type="password" class="input-large" id="id_password" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
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


</html>