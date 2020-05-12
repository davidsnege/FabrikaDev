<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */

    $pe ='';
    $pa ='';
    $te ='';
    $poss = '';
    $cpu = '';
    $hum = '';
    $winer = '';
    $cpu_choice = '';
    $hum_choice = '';
    $arg = '';
    $cpu_p = '';
    $hum_p = '';


function rodaRoda($arg){

    // CPU
    $poss = array("$pe", "$pa", "$te");
    $cpu = array_rand($poss);
    switch ($cpu) {
        case '0':
            $cpu_choice = "pe";
            setcookie("cpu_choice", $cpu_choice, time()+3600);
            break;
        case '1':
            $cpu_choice = "pa";
            setcookie("cpu_choice", $cpu_choice, time()+3600);
            break;
        case '2':
            $cpu_choice = "te";
            setcookie("cpu_choice", $cpu_choice, time()+3600);
            break;    
    }


    // HUM
    $hum = $arg;
    switch ($hum) {
        case 'pe':
            $hum_choice = "pe";
            setcookie("hum_choice", $hum_choice, time()+3600);
            break;
        case 'pa':
            $hum_choice = "pa";
            setcookie("hum_choice", $hum_choice, time()+3600);
            break;
        case 'te':
            $hum_choice = "te";
            setcookie("hum_choice", $hum_choice, time()+3600);
            break;    
    }


    // TESTA
    if($cpu_choice === $hum_choice){
        $winer = 'emp';
        setcookie("winer", "$winer", time()+3600);

        $cpu_p = $_COOKIE['cpu_p'];
        ++$cpu_p;
        setcookie("cpu_p", $cpu_p, time()+3600);
        $hum_p = $_COOKIE['hum_p'];
        ++$hum_p;
        setcookie("hum_p", $hum_p, time()+3600);
    }


    else if($cpu_choice == 'pe' && $hum_choice == 'te'){
        $winer = 'cpu';
        setcookie("winer", "$winer", time()+3600);

        $cpu_p = $_COOKIE['cpu_p'];
        ++$cpu_p;
        setcookie("cpu_p", $cpu_p, time()+3600);
    }


    else if($cpu_choice == 'te' && $hum_choice == 'pa'){
        $winer = 'cpu';
        setcookie("winer", "$winer", time()+3600);

        $cpu_p = $_COOKIE['cpu_p'];
        ++$cpu_p;
        setcookie("cpu_p", $cpu_p, time()+3600);
    }


    else if($cpu_choice == 'pa' && $hum_choice == 'pe'){
        $winer = 'cpu';
        setcookie("winer", "$winer", time()+3600);

        $cpu_p = $_COOKIE['cpu_p'];
        ++$cpu_p;
        setcookie("cpu_p", $cpu_p, time()+3600);
    }


    else if($hum_choice == 'pe' && $cpu_choice == 'te'){
        $winer = 'hum';
        setcookie("winer", "$winer", time()+3600);

        $hum_p = $_COOKIE['hum_p'];
        ++$hum_p;
        setcookie("hum_p", $hum_p, time()+3600);
    }


    else if($hum_choice == 'te' && $cpu_choice == 'pa'){
        $winer = 'hum';
        setcookie("winer", "$winer", time()+3600);

        $hum_p = $_COOKIE['hum_p'];
        ++$hum_p;
        setcookie("hum_p", $hum_p, time()+3600);
    }

    
    else if($hum_choice == 'pe' && $cpu_choice == 'pe'){
        $winer = 'hum';
        setcookie("winer", "$winer", time()+3600);

        $hum_p = $_COOKIE['hum_p'];
        ++$hum_p;
        setcookie("hum_p", $hum_p, time()+3600);
    }


    // NOVA PARTIDA
    if($cpu_p >= 5){
        setcookie("cpu_choice", $cpu_choice, time()-3600);
        setcookie("hum_choice", $hum_choice, time()-3600);
        setcookie("hum_p", $hum_p, time()-3600);
        setcookie("cpu_p", $cpu_p, time()-3600);
        setcookie("winer", "CPU Win!", time()+3600);
    }
    if($hum_p >= 5){
        setcookie("cpu_choice", $cpu_choice, time()-3600);
        setcookie("hum_choice", $hum_choice, time()-3600);
        setcookie("hum_p", $hum_p, time()-3600);
        setcookie("cpu_p", $cpu_p, time()-3600);
        setcookie("winer", "Humano Win!", time()+3600);
    }


}


if(isset($_POST['choice'])) {

    $arg = $_POST['choice'];
    rodaRoda($arg);

header('Location: jkp.php');
exit;
}



?>