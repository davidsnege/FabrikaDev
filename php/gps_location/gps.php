<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║ @AUTOR: DAVID SNEGE
//║
//║ No alterar los códigos y tampoco los valores de cada operacion, tu solo tiene permisso de cambiar los
//║ valores si por acaso el Planeta tierra cambiar sus dimensiones y los meridianos, de lo contra no cambie
//║ ningum valor.
//║
//║ Mirar los comentarios de cada linea para saber de que vá la cosa del calculo.
//║
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║
//║ GPS FUNCTION - DISTANCE CALC'S / QUERYES / BETWEEN / ORDER / VAR DISTANCE
//║
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║ COSENO FUNCTION - CALCULA LA DISTANCIA DE LOS CAMPINGS EN RELACION A COMMUNE BUSCADA
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
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


        // 1. Obtenga la posición GPS de la commune actual.
        // Armazenar en las variables de $latCommune, $lonCommune

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║ VARIABLES
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
        //CAMBIAMOS ACRESCENDO E DISMINUINDO LO RANGO DE BUSQUEDA EN LATITUDE
            $maxlat = $latCommune+00.5800;
            $minlat = $latCommune-00.5800;
        //CAMBIAMOS ACRESCENDO E DISMINUINDO LO RANGO DE BUSQUEDA EN LONGITUDE
            $maxlon = $lonCommune+00.5800;
            $minlon = $lonCommune-00.5800;

        // 2. Lo proximo Select debe coger los campings todos con la seguinte condicion
        //
        // WHERE (adresses.latitude BETWEEN $minlat AND $maxlat)
        // AND (adresses.longitude BETWEEN $minlon AND $maxlon) ";
        // "ahora debemos tener solo los campings con posicion correcta con la aproximación.

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║ GET FUNCTION - DISTANCE CALCULATION
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

        // Aqui sabemos las distancias de cada camping. adaptar a necesidades actuales

        $point1 = array("lat" => $latCommune, "long" => $lonCommune); // Commune
        $point2 = array("lat" => $camping["latitud"], "long" => $camping["longitud"]); // Campings

        // comparamos la distancia original de la primera busqueda con las posiciones de los campings encontrados
        $camping["distancia"] = distanceCalculation($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);


//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║ ORDEM CAMPINGS POR DISTANCIA
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

        // ORGANIZA POR LAS MENORES DISTANCIAS A LAS MAIORES - SE PODE CAMBIAR INVERTINDO EL -1 : 1 PARA 1 : -1
        function _ordenCampingsGPS($a, $b) {
        if ($a["distancia"] == $b["distancia"]) {
        return 0;
        }
        return ($a["distancia"] < $b["distancia"]) ? -1 : 1;
        }