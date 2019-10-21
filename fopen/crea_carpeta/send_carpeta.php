<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>


    <form action="crea_carpeta.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Carpeta</label>
        <input type="text" class="form-control" id="carpeta" name="carpeta">
        <small id="carpeta" class="form-text text-muted">El nombre de su carpeta a ser creada</small>
      </div>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
    <?php
        $i = 0;
        $items= 0;
        $diretorio = getcwd();
        $diretorio = "./carpetas";
        $ponteiro = opendir($diretorio);
        while ($nome_itens = readdir($ponteiro)) {
             $i++;
		$itens = $nome_itens;
        echo $itens."<br>";
        }
        $i=$i-2;

        if($i == 1){
            $sing_plur="Carpeta";
        }else{
            $sing_plur="Carpetas";
        }

        echo "<br><spam> Tenemos ".$i." " .$sing_plur. " en la carpeta: ". $diretorio."</spam>";
    ?>
