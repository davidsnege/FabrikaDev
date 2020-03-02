<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container"><center>

<?php 

    if(isset($_COOKIE['cpu_choice']) && isset($_COOKIE['hum_choice']) && isset($_COOKIE['hum_choice'])){
        echo $_COOKIE['cpu_choice'];
        if(isset($_COOKIE['cpu_p'])){
            echo $_COOKIE['cpu_p'];
        }
            echo ' vs ';
        if(isset($_COOKIE['hum_p'])){
            echo $_COOKIE['hum_p'];
        }
        echo $_COOKIE['hum_choice'];
    }
    if(isset($_COOKIE['winer'])){
        echo ' <br> ';
        echo $_COOKIE['winer'];
    }

?>


<form action="funcciones.php" method="POST">
<input type="hidden" name="choice" class="form-control" id="pe" aria-describedby="pe" value="pe" >
<input type="image" src="assets/rock.png" style="width: 50px;" name="pe" value="pe">
</form>
<form action="funcciones.php" method="POST">
<input type="hidden" name="choice" class="form-control" id="pa" aria-describedby="pa" value="pa" >
<input type="image" src="assets/paper.png" style="width: 50px;" name="pa" value="pa">
</form>
<form action="funcciones.php" method="POST">
<input type="hidden" name="choice" class="form-control" id="te" aria-describedby="te" value="te" >
<input type="image" src="assets/scissors.png" style="width: 50px;" name="te" value="te">
</form>


</div></center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>

