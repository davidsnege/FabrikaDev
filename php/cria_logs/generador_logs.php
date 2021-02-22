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
    //║  Gerar Logs para site, Necessita do arquivo envia.php "leia mais en envia.php"
    //║  Created By David Snege
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
            // Declaramos variables
            if(isset($_POST['mensagem_log'])){
            
            // Time monitor
            $time_start = microtime(true);

            // Geramos ID de LOG
            function generateRandomString($length = 128) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            // Armazenamos o valor aqui em value
            $value = "LOG ID: ". generateRandomString() . "\n";

            // Paramos de contar o tempo aqui
            $time_end = microtime(true);
			$execution_time = ($time_end - $time_start);

            // Contruimos a mensagem de log
            $value .= "Mensagem de Log:    " .$_POST['mensagem_log']. " \n";
            $value .= "Total Time:         " .intval($time_end). "m secs \n";
            $value .= "Data de Log:        " .date("d-m-Y") . " \n";
            $value .= "Hora de Log:        " .date("h:i:sa") . " \n";

            // Si exhiste archivo
            $filename = "log.txt";
            if (file_exists($filename)) {
            // echo "El archivo $filename ehxiste <br>";
            } else {
                echo "El archivo $filename no ehxiste <br>";
            }
            // Cria Archivo si no hay
            $arquivo = fopen("$filename",'a+');
            // Verifico si esta creado
            if ($arquivo == false) die("Não foi possível criar o arquivo. <br>");
            // Escribimos en el archivo
            fwrite($arquivo, $value."\n"); // Para saltar a linha tem que estar o "\n" entre aspas como string
            // Cerramos el archivo despues de escribir
            fclose($arquivo);
            exit;

            // Melhorar este arquivo com a opção de enviar um email de log para o admin
            // Melhoar este arquivo com a opção de gravar na base de dados se necessario
            // Estas opções tem que ser passadas no argumento como true ou false e entao este escript tem que
            // decidir o que fazer com o log (gravar TXT), (gravar TXT, enviar Email), (gravar TXT, enviar Email, gravar no BD)

            }
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>
