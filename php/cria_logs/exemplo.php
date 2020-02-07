<?php

    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    //║  Script de exemplo para simular gerador de logs em um script PHP
    //║  Created By David Snege
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗

        include 'envia.php';

        // Definimos os nomes
        $pedra ='Pedra';
        $papel ='Papel';
        $tesoura ='Tesoura';

        if(!isset($_COOKIE["pontosHumano"]) || !isset($_COOKIE["pontosComputador"]))
        {
          setcookie("pontosComputador", 0, time()+3600);
          setcookie("pontosHumano", 0, time()+3600);
        }else{

            $puntoC = '';
            $puntoH = '';
            
        
          


        $computador = array("$pedra", "$papel","$tesoura");
            $randIndex1 = array_rand($computador);
        echo $computador[$randIndex1];

        echo '&nbsp   X   &nbsp';

        $humano = array("$pedra", "$papel","$tesoura");
            $randIndex2 = array_rand($humano);
        echo $humano[$randIndex2];

    
            if ($computador[$randIndex1] === $humano[$randIndex2]){
                echo '<br>empate';
                echo "<br>Temos um empate";

                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);

                enviaLog("Empatamos"); // Se temos um empate, então registramos no LOG
            }
            elseif (($computador[$randIndex1] === 'Pedra') and ($humano[$randIndex2] === 'Tesoura')){
                echo '<br>Pedra';
                echo "<br>Computador Ganha";

                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);

            }
            elseif (($computador[$randIndex1] === 'Tesoura') and ($humano[$randIndex2] === 'Papel')){
                echo '<br>Tesoura';
                echo "<br>Computador Ganha";

                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
            }
            elseif (($computador[$randIndex1] === 'Papel') and ($humano[$randIndex2] === 'Pedra')){
                echo '<br>Papel';
                echo "<br>Computador Ganha";

                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
            }
            elseif (($humano[$randIndex2] === 'Pedra') and ($computador[$randIndex1] === 'Tesoura')){
                echo '<br>Pedra';
                echo "<br>Humano Ganha";

                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
            }
            elseif (($humano[$randIndex2] === 'Tesoura') and ($computador[$randIndex1] === 'Papel')){
                echo '<br>Tesoura';
                echo "<br>Humano Ganha";

                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
            }
            elseif (($humano[$randIndex2] === 'Papel') and ($computador[$randIndex1] === 'Pedra')){
                echo '<br>Papel';
                echo "<br>Humano Ganha";

                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
            }

            echo '<br>';
            echo 'Humano ' . $puntoH;
            echo ' X ' ;
            echo 'Computador ' . $puntoC;

        }

    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

?>

