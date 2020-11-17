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
    //║  Grabar en archivo txt por form, usado para editar robots.txt
    //║  Created By David Snege
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
            // Declaramos variables
            $value = '';
            $tipo = '';
            // parametros por POST
            $value = $_POST['Params'];
            // Si exhiste archivo
            $filename = 'robots.php';
            if (file_exists($filename)) {
            // echo "El archivo $filename ehxiste <br>";
            } else {
                echo "El archivo $filename no ehxiste <br>";
            }
            // Cria Archivo si no hay
            $arquivo = fopen('robots.php','rwx');
            // Verifico si esta creado
            if ($arquivo == false) die('Não foi possível criar o arquivo. <br>');
            // Escribimos en el archivo
            fwrite($arquivo, $texto);
            // Cerramos el archivo despues de escribir
            fclose($arquivo);
            // Sobrescribimos el archivo siempre que necesitamos
            $arquivo = fopen('robots.php','r+w+x+');
            $arquivo = str_replace(" ", "", $arquivo);
            $arquivo = str_replace(";;", ";", $arquivo);

            fwrite($arquivo, $value);
            // Cerramos despues de escribir
            fclose($arquivo);
            // Volvemos a página de form
            header('Location: index.php');
            exit;


            //Si necesitas solo añadir lineas como en un archivo de log, utilizar la opcion 'a'
            if($value != ''){
            // ADICIONA LINHA NO ARQUIVO
            $fp = fopen('robots.php', 'a +'); //Anade Lineas"
            for ($i=0; $i < 1; $i++) {
                fwrite($fp, $value);
            }
            fclose($fp);
            }


    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    //║  HELP - ES - PT - EN
    //║
    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
    //╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗

          // AYUDA - Descripción ES

          // 'r' Se abre solo para lectura; coloque el puntero de archivo al comienzo del archivo.
          // 'r +' Se abre para leer y escribir; coloque el puntero de archivo al comienzo del archivo.
          // 'w' Abierto solo para escritura; coloca el puntero del archivo al comienzo del archivo y reduce la longitud del archivo a cero. Si el archivo no existe, intente crearlo.
          // 'w +' Se abre para leer y escribir; coloca el puntero del archivo al comienzo del archivo y reduce la longitud del archivo a cero. Si el archivo no existe, intente crearlo.
          // 'a' Se abre solo para escribir; coloque el puntero del archivo al final del archivo. Si el archivo no existe, intente crearlo.
          // 'a +' Se abre para leer y escribir; coloque el puntero del archivo al final del archivo. Si el archivo no existe, intente crearlo.
          // 'x' Crea y abre el archivo de solo escritura; coloque el puntero al comienzo del archivo. Si el archivo ya existe, la llamada a fopen () fallará, devolverá FALSE y generará un error de nivel E_WARNING. Si el archivo no existe, intente crearlo. Esto es equivalente a especificar los indicadores O_EXCL | O_CREAT para la llamada al sistema abierto (2).
          // 'x +' Crea y abre el archivo para leer y escribir; coloque el puntero al comienzo del archivo. Si el archivo ya existe, la llamada a fopen () fallará, devolverá FALSE y generará un error de nivel E_WARNING. Si el archivo no existe, intente crearlo. Esto es equivalente a especificar los indicadores O_EXCL | O_CREAT para la llamada al sistema abierto (2).

          // fclose() - Cierra un puntero de archivo abierto
          // fgets() - Lee una línea desde un puntero de archivo
          // fread() - Lectura de archivos segura para binarios
          // fwrite(): escritura binaria segura en archivos
          // fsockopen(): abre un dominio de Unix o un socket de conexión a Internet
          // file(): lee el archivo completo en una matriz
          // file_exists() - Comprueba si existe un archivo o directorio
          // is_readable() - Indica si el archivo existe y si se puede leer.
          // stream_set_timeout() - Establece el período de tiempo de espera en una secuencia
          // popen() - Abre un proceso de puntero de archivo
          // stream_context_create() - Crea un contexto de transmisión

          // HELP - Descrição PT-BR

          ### Modos de Abertura de um arquivo com fopen()


          // 'r'	Apertura para sólo lectura; coloca el puntero al fichero al principio del fichero.
          // 'r+'	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero.
          // 'w'	Apertura para sólo escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
          // 'w+'	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
          // 'a'	Apertura para sólo escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() solamente afecta a la posición de lectura; las lecturas siempre son pospuestas.
          // 'a+'	Apertura para lectura y escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() no tiene efecto, las escrituras siempre son pospuestas.
          // 'x'	Creación y apertura para sólo escritura; coloca el puntero del fichero al principio del mismo. Si el fichero ya existe, la llamada a fopen() fallará devolviendo FALSE y generando un error de nivel E_WARNING. Si el fichero no existe se intenta crear. Esto es equivalente a especificar las banderas O_EXCL|O_CREAT para la llamada al sistema de open(2) subyacente.
          // 'x+'	Creación y apertura para lectura y escritura; de otro modo tiene el mismo comportamiento que 'x'.
          // 'c'	Abrir el fichero para sólo escritura. Si el fichero no existe, se crea. Si existe no es truncado (a diferencia de 'w'), ni la llamada a esta función falla (como en el caso con 'x'). El puntero al fichero se posiciona en el principio del fichero. Esto puede ser útil si se desea obtener un bloqueo asistido (véase flock()) antes de intentar modificar el fichero, ya que al usar 'w' se podría truncar el fichero antes de haber obtenido el bloqueo (si se desea truncar el fichero, se puede usar ftruncate() después de solicitar el bloqueo).
          // 'c+'	Abrir el fichero para lectura y escritura; de otro modo tiene el mismo comportamiento que 'c'.
          // 'e'	Establecer la bandera 'close-on-exec' en el descriptor de fichero abierto. Disponible solamente en PHP compilado en sistemas que se ajustan a POSIX.1-2008.


          // fclose() - Fecha um ponteiro de arquivo aberto
          // fgets() - Lê uma linha de um ponteiro de arquivo
          // fread() - Leitura binary-safe de arquivo
          // fwrite() - Escrita binary-safe em arquivos
          // fsockopen() - Abre um socket de conexão Internet ou de domínio Unix
          // file() - Lê todo o arquivo para um array
          // file_exists() - Verifica se um arquivo ou diretório existe
          // is_readable() - Diz se o arquivo existe e se ele pode ser lido
          // stream_set_timeout() - Set timeout period on a stream
          // popen() - Abre um processo como ponteiro de arquivo
          // stream_context_create() - Creates a stream context

          // HELP - Description EN


          ### Modos de Abertura de um arquivo com fopen()


          // 'r'	Apertura para sólo lectura; coloca el puntero al fichero al principio del fichero.
          // 'r+'	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero.
          // 'w'	Apertura para sólo escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
          // 'w+'	Apertura para lectura y escritura; coloca el puntero al fichero al principio del fichero y trunca el fichero a longitud cero. Si el fichero no existe se intenta crear.
          // 'a'	Apertura para sólo escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() solamente afecta a la posición de lectura; las lecturas siempre son pospuestas.
          // 'a+'	Apertura para lectura y escritura; coloca el puntero del fichero al final del mismo. Si el fichero no existe, se intenta crear. En este modo, fseek() no tiene efecto, las escrituras siempre son pospuestas.
          // 'x'	Creación y apertura para sólo escritura; coloca el puntero del fichero al principio del mismo. Si el fichero ya existe, la llamada a fopen() fallará devolviendo FALSE y generando un error de nivel E_WARNING. Si el fichero no existe se intenta crear. Esto es equivalente a especificar las banderas O_EXCL|O_CREAT para la llamada al sistema de open(2) subyacente.
          // 'x+'	Creación y apertura para lectura y escritura; de otro modo tiene el mismo comportamiento que 'x'.
          // 'c'	Abrir el fichero para sólo escritura. Si el fichero no existe, se crea. Si existe no es truncado (a diferencia de 'w'), ni la llamada a esta función falla (como en el caso con 'x'). El puntero al fichero se posiciona en el principio del fichero. Esto puede ser útil si se desea obtener un bloqueo asistido (véase flock()) antes de intentar modificar el fichero, ya que al usar 'w' se podría truncar el fichero antes de haber obtenido el bloqueo (si se desea truncar el fichero, se puede usar ftruncate() después de solicitar el bloqueo).
          // 'c+'	Abrir el fichero para lectura y escritura; de otro modo tiene el mismo comportamiento que 'c'.
          // 'e'	Establecer la bandera 'close-on-exec' en el descriptor de fichero abierto. Disponible solamente en PHP compilado en sistemas que se ajustan a POSIX.1-2008.


          // fclose() - Closes an open file pointer
          // fgets() - Reads a line from a file pointer
          // fread() - Binary-safe file reading
          // fwrite() - Binary-safe writing to files
          // fsockopen() - Opens a Unix domain or Internet connection socket
          // file() - Reads the entire file to an array
          // file_exists() - Check if a file or directory exists
          // is_readable() - Tell if the file exists and if it can be read.
          // stream_set_timeout() - Set timeout period on a stream
          // popen() - Opens a file pointer process
          // stream_context_create() - Creates a stream context

          // Documentacion disponible en https://www.php.net/manual/pt_BR/function.fopen.php

    //╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>
