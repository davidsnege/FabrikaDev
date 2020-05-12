<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

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

        if(isset($_POST)){

            $point1['lat']  = $_POST['lat1'];
            $point1['long'] = $_POST['long1'];
            $point2['lat']  = $_POST['lat2'];
            $point2['long'] = $_POST['long2'];

            $objetiveDistance = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);

            echo $objetiveDistance.'km';

        }else{
            echo "Faltan parametros de Longitud e Latitud";
        }


        