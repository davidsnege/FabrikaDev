<?php
/**
 * @version     0.0.1
 * @package     
 * @subpackage  
 * @author      davidsnege <david.snege@gmail.com>
 * @copyright   2020 davidsnege (FabrikaDev)
 * @license     Licença de uso Somente para uso no ensino de Programação (Outros usos estão vetados)
 */
$headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";

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

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To:  <'.$para.'>' . "\r\n";
$cabeceras .= 'From: David <'.$desde.'>' . "\r\n";
$cabeceras .= 'Reply-To: David <'.$desde.'>' . "\r\n";
$cabeceras .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
// $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
// $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";



// Enviarlo
// mail($para, $assunto, $mensaje, $cabeceras);

$success = mail($para, $assunto, $mensaje, $cabeceras);
if (!$success) {
    $errorMessage = error_get_last()['message'];
}else{
  echo "Enviado com sucesso!";
}

?>
