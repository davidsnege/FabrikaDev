<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- CKeditor Script for edition -->
<script src="../ckeditor/ckeditor.js"></script>
</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-md">

            <h3>Envie Seu E-Mail</h3>

            <form action="send_mail.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">De Seu Email</label>
                <input type="email" name="desde" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">É Obrigatório que você coloque um e-mail válido</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Para o Email</label>
                <input type="email" name="para" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">É Obrigatório que você coloque um e-mail válido</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Assunto do Email</label>
                <input type="text" name="assunto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Especifique o assunto">
                <small id="emailHelp" class="form-text text-muted">Coloque seu Assunto</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Seu Texto</label>
                <textarea name="texto"></textarea>
                <small id="emailHelp" class="form-text text-muted">Use seu melhor Texto</small>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        </div>
        <div class="col-sm">

        </div>
      </div>
    </div>



<script>
    CKEDITOR.replace( 'texto' );
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
