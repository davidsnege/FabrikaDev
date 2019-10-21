<?php
$to      = 'davidrodriguez@thelis.es';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: davidrodriguez@thelis.es' . "\r\n" .
    'Reply-To: davidrodriguez@thelis.es' . "\r\n" .
    'X-Mailer: PHP/';
mail($to, $subject, $message, $headers);
?>
