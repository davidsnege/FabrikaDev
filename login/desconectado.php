<!-- Este archivo solo comproba que tu ya no esta con una session abierta y te da la opcion de ir a la index.php para intentar hacer login mas una vez -->

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
            
        <!-- Es solo un div para dar espacio y centro -->
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
        </br>
                <form action="index.php" method="post">
                <input type="hidden" class="form-control" name="tipo" value="0">
                <input type="hidden" class="form-control" name="user" value="none" require>
                <input type="hidden" class="form-control" name="password" value="none" require>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
        </br>
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
