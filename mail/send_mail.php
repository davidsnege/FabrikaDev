<?php
$desde = $_POST['desde'];
$para = $_POST['para'];
$assunto = $_POST['assunto'];
$texto = htmlspecialchars($_POST['texto']);

// título
$titulo = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Email desde Mi PHP</title>
</head>
<body>
    '.$texto.'
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To:  <'.$para.'>' . "\r\n";
$cabeceras .= 'From: David <'.$desde.'>' . "\r\n";
// $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
// $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
mail($para, $assunto, $mensaje, $cabeceras);
?>
