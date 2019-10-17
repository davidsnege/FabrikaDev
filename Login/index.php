<!-- Incluimos en lo index todo lo que necessitamos para hacer funcionar -->
<?php include "controller/bo_controller.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css" >
    <title>BO</title>
  </head>
  <body class="background">

        <div class="container">
        <div class="row">

        <!-- Es solo un div para dar espacio y centro .. -->
        <div class="col-sm">
        </div>

        <!-- Es lo div principal donde esta todo -->
        <div class="col-sm bg-text">
        <!-- Versiones del logo en la página de login -->
            <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/1.png" style=" width: 64px; margin: 30px;"></center>
            <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/2.png" style=" width: 64px; margin: 30px;"></center> -->
            <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/3.png" style=" width: 64px; margin: 30px;"></center> -->
            <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/4.png" style=" width: 64px; margin: 30px;"></center> -->
            <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/5.png" style=" width: 64px; margin: 30px;"></center> -->
            <?php
            // Hacemos todas las verificacciones a partir de aqui utilizando el archivo bo_controller.php para gestionar las conexiones
            if(!isset($_SESSION)){
                // Si tu no tienes una session valida entonces te enseñamos el form con la opcion de login
                echo '
                    <form action="index.php" method="post">
                    <input type="hidden" class="form-control" name="tipo" value="0">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="text" class="form-control" name="user" require>
                    <small class="form-text text-muted">Su usuário.</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" require>
                    <small class="form-text text-muted">Su contraseña.</small>
                    </div>
                    <div class="form-group form-check">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-keyboard-o fa-1x" aria-hidden="true"></i>  Login</button>
                    </form>
                    </br>
                    ';
                    // Si tu form no esta con dados te enseña la mensagem de que no los campos estan vacios
                    if(isset($statusLogin)){
                        echo '</br>
                            <div id="alerta1" class="alert alert-warning alert-dismissible fade show " role="alert" >
                            <strong>Hola!</strong> Los Campos están vacios...
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        ';
                    // Si los campos no estan vacios pero aun asi no corresponden con un usuario y contraseña validos le decimos
                    }else{
                        echo '</br>
                            <div id="alerta2" class="alert alert-danger alert-dismissible fade show" role="alert" >
                            <strong>Hola!</strong> Su usuário o Contraseña están incorrectos...
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        ';
                    }
            }
                // Cuando tu tienes session y su login esta ok, entonces tu eres bienvenido o podes hacer logoff
                if(isset($_SESSION)){
                    echo "<center><p> Bienvenido! ".$_SESSION['login']." </p></center>";
                    // Ponemos un alert bootstrap guay para tu login bien hecho!
                    if(isset($_SESSION)){
                        echo '</br>
                            <div id="alerta3" class="alert alert-success alert-dismissible fade show" role="alert" >
                            <strong>  Hola!</strong> Acceda su área de ';
                            if($_SESSION['level'] == 1){echo "Admin <i class='fa fa-plug fa-1x' aria-hidden='true'></i>";}else{echo "Usuario <i class='fa fa-plug fa-1x' aria-hidden='true'></i>";}
                        echo '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        ';
                    }
                    // Su button de acceder a su escritorio de BackOffice esta aqui
                    echo '<form action="home.php" method="post">
                         <input type="hidden" class="form-control" name="success" value="1">
                         <button type="submit" class="btn btn-success btn-block"><i class="fa fa-connectdevelop fa-1x" aria-hidden="true"></i> Acceder BO</button>
                         </form></br>
                         <!-- Su button para logoff esta aqui -->
                         <form action="index.php" method="post">
                         <input type="hidden" class="form-control" name="tipo" value="1">
                         <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-power-off fa-1x" aria-hidden="true"></i> Logoff</button>
                         </form>
                         </br>
                        ';
                }
            ?>
        </div>
        <!-- Es solo un div para dar espacio y centro -->
        <div class="col-sm">
        </div>

        </div>
        </div>


<!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
</html>
