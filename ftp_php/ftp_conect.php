<?php

$ftp_server = "ftp.example.com";

// establecer una conexión o finalizarla
$conn_id = ftp_connect($ftp_server) or die("No se pudo conectar a $ftp_server");

?>
