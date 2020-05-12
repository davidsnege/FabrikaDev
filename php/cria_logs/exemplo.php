<!-- Vamos carregar o Bootstrap aqui -->
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
<div class="container"><center>
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
    //║  Script de exemplo para simular gerador de logs em um script PHP - Pedra, Papel, Tesoura
    //║  Created By David Snege
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗

        include 'envia.php';

        // Definimos os nomes
        $pedra ='Pedra';
        $papel ='Papel';
        $tesoura ='Tesoura';

        
        $puntoC =1;
        $puntoH =1;

        if(!isset($_COOKIE["pontosHumano"]) || !isset($_COOKIE["pontosComputador"]))
        {
          setcookie("pontosComputador", 0, time()+3600);
          setcookie("pontosHumano", 0, time()+3600);


            //Ainda não temos cookie lido no navegador - Tela de Boas Vindas e primeira escolha
            echo '

            <div class="row">

            <div class="col-sm">
            </div>

            <div class="col-sm">
            Bem Vindo Vamos Começar
            </div>

            <div class="col-sm">
            </div>

            </div>

            ';


        }else{


            $computador = array("$pedra", "$papel","$tesoura");
            $randIndex1 = array_rand($computador);


                    if(isset($_POST['escolha'])){ // Si Humano escolhe uma opção vai pela escolha
                        $humano = $_POST['escolha'];
                        $randIndex2 = $_POST['escolha'];
                    }else{
                        $humano = array("$pedra", "$papel","$tesoura"); // Se não ele escolhe um random por F5
                        $randIndex2 = array_rand($humano);
                        $humano = $humano[$randIndex2];
                    }


           
            echo '
            <div class="row">
            <div class="col-md-4">

                <h5>Máquina VS Humano</h5>

                <br>

            </div>
            ';

        echo '
        <div class="col-md-4">
        ';

            function confereGanha(){
                $puntoC = $_COOKIE["pontosComputador"];
                $puntoH = $_COOKIE["pontosHumano"];
                // Si chegamos a 5 pontos de algum dos lados entao voltamos a zero e começamos de novo
                if(isset($_COOKIE["pontosComputador"])){
                    if($_COOKIE["pontosComputador"] >= 3 || $_COOKIE["pontosHumano"] >= 3){
                        
                        if($_COOKIE["pontosComputador"] > $_COOKIE["pontosHumano"]){
                            echo "Computador Ganhou";

                            echo "<br>";
                            echo '
                                <form action="exemplo.php" method="POST">
                                <input type="hidden" name="escolha" class="form-control" id="papel" aria-describedby="papel" value="" >
                                <input type="image" src="assets/start.png" style="width: 50px;" name="submit">
                                </form>
                                ';

                            setcookie("pontosComputador", 0, time()+3600);
                            setcookie("pontosHumano", 0, time()+3600);
                            ++$puntoC;
                            ++$puntoH;

                        }elseif($_COOKIE["pontosComputador"] < $_COOKIE["pontosHumano"]){
                            echo "Humano Ganhou";

                            echo "<br>";
                            echo '
                                <form action="exemplo.php" method="POST">
                                <input type="hidden" name="escolha" class="form-control" id="papel" aria-describedby="papel" value="" >
                                <input type="image" src="assets/start.png" style="width: 50px;" name="submit">
                                </form>
                                ';

                            setcookie("pontosComputador", 0, time()+3600);
                            setcookie("pontosHumano", 0, time()+3600);
                            ++$puntoC;
                            ++$puntoH;

                        }else{
                            echo "Que bonitinho, Empataram";

                            echo "<br>";
                            echo '
                                <form action="exemplo.php" method="POST">
                                <input type="hidden" name="escolha" class="form-control" id="papel" aria-describedby="papel" value="" >
                                <input type="image" src="assets/start.png" style="width: 50px;" name="submit">
                                </form>
                                ';
                            
                            setcookie("pontosComputador", 0, time()+3600);
                            setcookie("pontosHumano", 0, time()+3600);
                            ++$puntoC;
                            ++$puntoH;

                        }
                    }
                }
            }

            //
            if ($computador[$randIndex1] === $humano){
                echo "Temos um empate";
                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
                // enviaLog("".$computador[$randIndex1]." x ".$humano." : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }
            elseif (($computador[$randIndex1] === 'Pedra') and ($humano === 'Tesoura')){
                echo 'Pedra x Tesoura';
                // echo "Computador Ganha";
                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
                // enviaLog("Pedra x Tesoura : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }
            elseif (($computador[$randIndex1] === 'Tesoura') and ($humano === 'Papel')){
                echo 'Tesoura x Papel';
                // echo "Computador Ganha";
                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
                // enviaLog("Tesoura x Papel : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }
            elseif (($computador[$randIndex1] === 'Papel') and ($humano === 'Pedra')){
                echo 'Papel x Pedra';
                // echo "Computador Ganha";
                $puntoC = $_COOKIE["pontosComputador"];
                ++$puntoC;
                setcookie("pontosComputador", $puntoC, time()+3600);
                // enviaLog("Papel x Pedra : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }
            elseif (($humano === 'Pedra') and ($computador[$randIndex1] === 'Tesoura')){
                echo 'Tesoura x Pedra';
                // echo "Humano Ganha";
                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
                // enviaLog("Tesoura x Pedra : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }
            elseif (($humano === 'Tesoura') and ($computador[$randIndex1] === 'Papel')){
                echo 'Papel x Tesoura';
                // echo "Humano Ganha";
                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
                // enviaLog("Papel x Tesoura : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }
            elseif (($humano === 'Papel') and ($computador[$randIndex1] === 'Pedra')){
                echo 'Pedra x Papel';
                // echo "Humano Ganha";
                $puntoH = $_COOKIE["pontosHumano"];
                ++$puntoH;
                setcookie("pontosHumano", $puntoH, time()+3600);
                // enviaLog("Pedra x Papel : ".$_COOKIE["pontosComputador"]." Computador:  x Humano: ".$_COOKIE["pontosHumano"]." ");
            }

            echo '

            <br>
            <div class="row"><br>

            <div class="col-sm">
                <form action="exemplo.php" method="POST">
                <input type="hidden" name="escolha" class="form-control" id="pedra" aria-describedby="pedra" value="Pedra" >
                <input type="image" src="assets/rock.png" style="width: 50px;" name="submit">
                </form>
            </div>

            <div class="col-sm">
                <form action="exemplo.php" method="POST">
                <input type="hidden" name="escolha" class="form-control" id="papel" aria-describedby="papel" value="Papel" >
                <input type="image" src="assets/paper.png" style="width: 50px;" name="submit">
                </form>
            </div>

            <div class="col-sm">
                <form action="exemplo.php" method="POST">
                <input type="hidden" name="escolha" class="form-control" id="scissors" aria-describedby="scissors" value="Tesoura" >
                <input type="image" src="assets/scissors.png" style="width: 50px;" name="submit">
                </form>
            </div>

            </div>




            </div>

            <div class="col-md-4">
            </div>

            </div>

            ';

        }


    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>


 




            <div class="row">

                <div class="col-sm">
                    <?php 
                    if(isset($_COOKIE["pontosHumano"])){
                    // echo $_COOKIE["pontosComputador"]; 
                    }
                    ?>
                </div>

                    <div class="col-sm">
                        x   
                    </div>

                <div class="col-sm">
                    <?php 
                    if(isset($_COOKIE["pontosHumano"])){
                    // echo $_COOKIE["pontosHumano"]; 
                    }
                    ?>
                </div>
                
            </div>            
            
            
            <div class="row">

                <div class="col-sm">
                    
                </div>

                    <div class="col-sm"><br>
                        <?php 
                        if(isset($_COOKIE["pontosHumano"])){
                        confereGanha(); 
                        }
                        ?>
                    </div>

                <div class="col-sm">
                    
                </div>
                
            </div>

</div></center>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
