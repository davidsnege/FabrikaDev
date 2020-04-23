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
<div class="container-fluid">

<div class="row">

    <div class="col-sm-3"></div>
    <div class="col-sm-6">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <center>
            <h1 class="display-4">Calculadora distância</h1>
            <p class="lead">Usando posições de Latitude / Longitude para calcular a distância entre 2 pontos</p>
            </center>
        </div>
    </div>

    <br>

        <form action="gpsdistance.php" method="POST">

            <h5>latitude e Longitude da localização 1</h5>

            <div class="form-group row">
                <label for="lat1" class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-10">
                <input type="text" name="lat1" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="long1" class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-10">
                <input type="text" name="long1" class="form-control">
                </div>
            </div>

            <h5>latitude e Longitude da localização 2</h5>

            <div class="form-group row">
                <label for="lat2" class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-10">
                <input type="text" name="lat2" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="long2" class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-10">
                <input type="text" name="long2" class="form-control">
                </div>
            </div>        


            <input type="submit">

        </form>




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


<?php

        function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║ CALCULOS MATEMATICOS EN COSENO SENO LAT LONG GRADOS MERIDIANOS RADIALES
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
        // Cálculo de la distancia en grados
            $degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
        // Conversión de la distancia en grados a la unidad escogida (kilómetros, millas o millas naúticas)
            switch($unit) {
            case 'km':
        // NO CAMBIAR LOS * XX.XXXXX; NUNCA
            $distance = $degrees * 111.13384;
        // 1 grado = 111.13384 km, basándose en el diametro promedio de la Tierra (12.735 km)
            break;
            case 'mi':
        // NO CAMBIAR LOS * XX.XXXXX; NUNCA
            $distance = $degrees * 69.05482;
        // 1 grado = 69.05482 millas, basándose en el diametro promedio de la Tierra (7.913,1 millas)
            break;
            case 'nmi':
        // NO CAMBIAR LOS * XX.XXXXX; NUNCA
            $distance =  $degrees * 59.97662;
        // 1 grado = 59.97662 millas naúticas, basándose en el diametro promedio de la Tierra (6,876.3 millas naúticas)
            }
            return round($distance, $decimals);
            }

        if(isset(   $_POST['lat1']) || isset($_POST['lat2']) || isset($_POST['long1']) || isset($_POST['long2'])  ){

            $point1['lat']  = $_POST['lat1'];
            $point1['long'] = $_POST['long1'];
            $point2['lat']  = $_POST['lat2'];
            $point2['long'] = $_POST['long2'];

            $objetiveDistance = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);

            echo '<br><center><h3>A Distância entre os pontos é de: '.$objetiveDistance.'km  </h3></center>';

        }else{
            echo "<br> <div class='alert alert-danger' role='alert'>Primeiro Complete os campos e depois envie para saber a distância</div> ";
        }
?>


    </div>
    <div class="col-sm-3"></div>

</div>

</div>