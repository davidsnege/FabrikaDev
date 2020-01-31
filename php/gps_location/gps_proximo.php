<?php
// Ver como implementar isso nas aulas, pode ser util, muito util, mas o codigo nao esta feito para aulas e nem para amadores




//COSENO FUNCTION - CALCULA LA DISTANCIA DE LOS CAMPINGS EN RELACION A COMMUNE BUSCADA
function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2) {
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

    $latCommune=$gpsinit['latitude'];
    $lonCommune=$gpsinit['longitude'];

//CAMBIAMOS ACRESCENDO E DISMINUINDO LO RANGO EN LATITUDE
    $maxlat = $latCommune+00.5800;
    $minlat = $latCommune-00.5800;
//CAMBIAMOS ACRESCENDO E DISMINUINDO LO RANGO EN LONGITUDE
    $maxlon = $lonCommune+00.5800;
    $minlon = $lonCommune-00.5800;


//BUSCAMOS NA BASE "BETWEEN" PORQUE QUEREMOS LATITUDES E LONGITUDES ENTRE NOSSOS VALORES maxlat E maxlon
    $query = "SELECT SUASCOLUNAS FROM SUABASE
    WHERE latitude BETWEEN $minlat AND $maxlat
    AND longitude BETWEEN $minlon AND $maxlon";

    $result = mysqli_query($connection, $query);
//CRIAMOS UN ARRAY PARA USAR DEPOIS
    $km = array(
    "distancia" => $km );
//CRIAMOS OS PONTOS APRA PASSAR A FUNCAO
    $point1 = array("lat" => $latCommune, "long" => $lonCommune); // Commune
    $point2 = array("lat" => $camping["latitud"], "long" => $camping["longitud"]); // Campings
//PASSAMOS OS DADOS A FUNCAO PARA RECEBER O VALOR
    $meuresultado["distancia"] = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);
//FECHAMOS A CONEXAO
    $connection->close();
