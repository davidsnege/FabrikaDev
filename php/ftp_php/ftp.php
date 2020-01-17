<?php

// abrir un archivo para su lectura
$file = 'test.txt';
$fp = fopen($file, 'r');


$ftp_server = "185.66.41.48";
$ftp_user_name = "davidsne";
$ftp_user_pass = "gnMH29aa";
$ftp_dirInt = "/web";

// establecer una conexión básica
$conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server");

// iniciar sesion con nombre de usuario y contraseña
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
// Change the dir
ftp_chdir($conn_id, $ftp_dirInt);

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
