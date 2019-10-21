<?php
//creamos la carpeta si no existe
$carpeta = $_POST['carpeta'];
if (!file_exists($carpeta)) {
mkdir('carpetas/'.$carpeta, 0777, true); //poner la ruta correcta
}

header('Location: send_carpeta.php');
?>
