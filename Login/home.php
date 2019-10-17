<!-- Este archivo solo simula su verdadero archivo de BackOffice, o sea, aqui seria donde tu solo quiere que accedan los usuarios autorizados -->
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

    <title>BO</title>
  </head>
  <body>

      <!-- Versiones del logo en la página de login -->
          <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/1.png" style=" width: 64px; margin: 30px;"></center>
          <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/2.png" style=" width: 64px; margin: 30px;"></center> -->
          <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/3.png" style=" width: 64px; margin: 30px;"></center> -->
          <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/4.png" style=" width: 64px; margin: 30px;"></center> -->
          <!-- <center><img src="http://davidsnege.com/wp-content/uploads/2019/10/5.png" style=" width: 64px; margin: 30px;"></center> -->

<!-- Tu puedes añadir este troco de codigo abajo en cualquer una de sus páginas del projecto que desea proteger, y atencion a la redireccion del header abajo, pues cuando tu usuario no este autenticado es ahi donde se redirecciona el usuario -->
    <?php
    // soy el verificador de login (si tu tienes que proteger una página use este script dentro de su página)
        if(isset($_POST['success']) == 1){
            echo "isset";
        }else{
            header('Location: desconectado.php'); // Si cambiar su directorio se atente para esta direccion
            exit;
        }
    ?>

<!-- Solo estoy aqui para tu volver a la pantalla de login y este en estado inactivo de logoff -->
    <form action="desconectado.php" method="post">
         <input type="hidden" class="form-control" name="success" value="0">
         <button type="submit" class="btn btn-warning">Logoff</button>
    </form></br>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>
</html>
