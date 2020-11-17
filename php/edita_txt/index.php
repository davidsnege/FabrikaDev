<!DOCTYPE html>
<html lang="es">
<head>
  <title>Editor robots.txt</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>




<div class="container">
    <form action="generador.php" method="post">
        Poner las instrucciones (Allow: / Disallow:) seguido de los parametros que desea. <br>
        <textarea cols="100%" rows="25" type="text" name="Params" style=" font-family: monospace; background: black;color: chartreuse;" required>
            <?php
            $ctx ="";
            // LE ARQUIVO
            $ctx = stream_context_create(array(
                'http' => array(
                    'timeout' => 1
                    )
                )
            );
            $ctx = file_get_contents('robots.php', 1, $ctx);
            $ctx = str_replace(" ", "", $ctx);
            $ctx = str_replace(";;", ";", $ctx);
            $ctx = str_replace("            ", "", $ctx);
                echo $ctx;
            ?>
            </textarea>
            <br>
    <button type="submit" class="btn btn-dark ">Gravar</button>
    </form>
</div>



</body>
</html>
