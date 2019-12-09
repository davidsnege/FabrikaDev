<?php
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
            // $arquivo = str_replace(" ", "", $arquivo);

            fwrite($arquivo, $value);
            // Cerramos despues de escribir
            fclose($arquivo);
            // Volvemos a página de form
            header('Location: index.php');
            exit;


            //Si necesitas solo añadir lineas como en un archivo de log, utilizar la opcion 'a'
            // if($value != ''){
            // // ADICIONA LINHA NO ARQUIVO
            // $fp = fopen('robots.php', 'a'); //Anade Lineas"
            // for ($i=0; $i < 1; $i++) {
            //     fwrite($fp, $value);
            // }
            // fclose($fp);
            // }


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

          // 'r'	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
          // 'r+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
          // 'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
          // 'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
          // 'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
          // 'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
          // 'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
          // 'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

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

          // 'r' Opens for read only; place the file pointer at the beginning of the file.
          // 'r +' Opens for reading and writing; place the file pointer at the beginning of the file.
          // 'w' Open for writing only; places the file pointer at the beginning of the file and reduces the file length to zero. If the file does not exist, try to create it.
          // 'w +' Opens for reading and writing; places the file pointer at the beginning of the file and reduces the file length to zero. If the file does not exist, try to create it.
          // 'a' Opens for writing only; place the file pointer at the end of the file. If the file does not exist, try to create it.
          // 'a +' Opens for reading and writing; place the file pointer at the end of the file. If the file does not exist, try to create it.
          // 'x' Create and open the write-only file; place the pointer at the beginning of the file. If the file already exists, the call to fopen () will fail, returning FALSE and generating an E_WARNING level error. If the file does not exist, try to create it. This is equivalent to specifying the O_EXCL | O_CREAT flags for the open (2) system call.
          // 'x +' Create and open the file for reading and writing; place the pointer at the beginning of the file. If the file already exists, the call to fopen () will fail, returning FALSE and generating an E_WARNING level error. If the file does not exist, try to create it. This is equivalent to specifying the O_EXCL | O_CREAT flags for the open (2) system call.

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
