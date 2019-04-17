
<?php 

include '../index.php';

?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../EstiloEtc.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Pesca inicial</title>


    </head> 
    <body>
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
    </body>

<
    </head>
    
</html>
<script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
<?php


