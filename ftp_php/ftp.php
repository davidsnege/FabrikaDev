<?php

// abrir un archivo para su lectura
$file = 'somefile.txt';
$fp = fopen($file, 'r');

// establecer una conexión básica
$conn_id = ftp_connect($ftp_server);

// iniciar sesion con nombre de usuario y contraseña
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// intentar cargar $file
if (ftp_fput($conn_id, $file, $fp, FTP_ASCII)) {
    echo "Cargado correctamente $file\n";
} else {
    echo "Ha habido un problema al cargar $file\n";
}

// cerrar la conexion ftp y el gestor de archivo
ftp_close($conn_id);
fclose($fp);

?>
