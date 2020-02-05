<?php

header('Content-Type: text/html; charset=utf-8');

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Cargamos las Classes que necessitamos de PHPMailer
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

		// Import PHPMailer classes into the global namespace
		// These must be at the top of your script, not inside a function
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;


//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Cargamos el Loader de Vendor que instalamos por composer utilizando el comando abajo comentado
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

		//If you dont have instal this: Composer require phpmailer/phpmailer

		// Load Composer's autoloader
		require 'vendor/autoload.php';

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Solo aceptamos requisiciones POST por seguridad, Y luego verificamos si hay 'authorized'
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

  //Para testear, cambiar para GET
    if( $_SERVER['REQUEST_METHOD'] != 'POST' ){
      echo "\n Error 1 - This method is not allowed or you are not authorized to access this API. Please refer to the documentation or contact the administrator.<br>";
      header("HTTP/1.0 405 Method Not Allowed");
    }else{
      echo "Estamos utilizando POST, Bien!";

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Hacemos una verificacion si recibimos el 'authorized' entonces enviamos el correo con los POSTs
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

//Lo ideal es configurar una clave exclusiva para recibir por authorized y verificar si es correcta
  // if(isset($_POST['authorized']) && $_POST['authorized'] == 'Xjas89tta5slkaskdjm1123kasd985'){

  if(isset($_POST['authorized'])){

				$authorized = 1;
			//Server Settings
				$host = $_POST['Host'];
				$smtpAuth = $_POST['SMTPAuth'];
				$userName = $_POST['Username'];
				$password = $_POST['Password'];
				$port_smtp = $_POST['port_smtp'];
			//Recipients
				$setFrom_mail = $_POST['setFrom_mail'];
				$setFrom_name = $_POST['setFrom_name'];
				$setAddAddress1 = $_POST['addAddress1'];
				$setAddAddress1_name = $_POST['addAddress1_name'];
				$setAddAddress2 = $_POST['addAddress2'];
				$setAddAddress2_name = $_POST['addAddress2_name'];
				$setAdd_CC = $_POST['addAddress_CC'];
				$setAdd_BCC = $_POST['addAddress_BCC'];
			//Content
				$mail_Subject = $_POST['mail_Subject'];
				$mail_Body    = $_POST['mail_Body'];
				$mail_AltBody = $_POST['mail_AltBody'];

  }else{

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Como no tiene autorizacion entonces queremos saber si IP para saber de donde viene
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
			$authorized = 0;

      //Estas mensage se enseña en navegadores y en Postman
      if (isset($_SERVER["HTTP_CLIENT_IP"]))
      {
          echo '<pre>Su IP de acesso es: ' . $_SERVER["HTTP_CLIENT_IP"] . '<br></pre>';
          $ip_not_authorized = $_SERVER["HTTP_CLIENT_IP"];
      }
      elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
      {
          echo '<pre>Su IP de acesso es: ' . $_SERVER["HTTP_X_FORWARDED_FOR"] . '<br></pre>';
          $ip_not_authorized = $_SERVER["HTTP_X_FORWARDED_FOR"];
      }
      elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
      {
          echo '<pre>Su IP de acesso es: ' . $_SERVER["HTTP_X_FORWARDED"] . '<br></pre>';
          $ip_not_authorized = $_SERVER["HTTP_X_FORWARDED"];
      }
      elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
      {
          echo '<pre>Su IP de acesso es: ' . $_SERVER["HTTP_FORWARDED_FOR"] . '<br></pre>';
          $ip_not_authorized = $_SERVER["HTTP_FORWARDED_FOR"];
      }
      elseif (isset($_SERVER["HTTP_FORWARDED"]))
      {
          echo '<pre>Su IP de acesso es: ' . $_SERVER["HTTP_FORWARDED"] . '<br></pre>';
          $ip_not_authorized = $_SERVER["HTTP_FORWARDED"];
      }
      else
      {
          echo '<pre>Su IP de acesso es: ' . $_SERVER["REMOTE_ADDR"] . '<br></pre>';
          $ip_not_authorized = $_SERVER["REMOTE_ADDR"];
      }

      //Esta mensage se enseña en navegadores y en Postman
      echo '<p><pre>
            Usted no tiene permissos para acceder a esta API, o no esta configurado con los parâmetros que deberia,
            si todavia desea utilizar esta API, envia un correo a el administrador del sitio web que te hay passado
            las configuraciones, comenta sobre su dificuldad y podrá acceder con los datos necessários. </p>
            </pre>
      ';

      //Configuraciones Fijas para envio de info de no autorizado a utilizar la API
			//Server Settings
				$host = 'antispam.thelis.es';
				$smtpAuth = true;
				$userName = 'thelises@thelis.es';
				$password = '34trYHQ1h+nEZSZroQNIBZNxLplIg7';
				$port_smtp = 2648;
			//Recipients
				$setFrom_mail = 'thelises@thelis.es';
				$setFrom_name = 'Esta mensage no esta authorized';
				$setAddAddress1 = 'davidrodriguez@thelis.es';
				$setAddAddress1_name = 'Esta mensage no esta authorized ADDR 1';
				$setAddAddress2 = 'davidrodriguez@thelis.es';
				$setAddAddress2_name = 'Esta mensage no esta authorized ADDR 2';
				$setAdd_CC = 'davidrodriguez@thelis.es';
				$setAdd_BCC = 'davidrodriguez@thelis.es';
			//Content
				$mail_Subject = '<pre>El IP es, '.$ip_not_authorized.' Esta mensage no esta authorized </pre>';
				$mail_Body    = '<pre>El IP es, '.$ip_not_authorized.'  <b>in bold!, Esta mensage no esta authorized</b> </pre>';
				$mail_AltBody = '<pre>El IP es, '.$ip_not_authorized.' , Esta mensage no esta authorized </pre>';

			//  Aqui enviamos un correo de alerta solo, pues no se cumpliu la condición 'authorized'
				$mail = new PHPMailer(true);

				try {
				    //Server settings
				    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                        // Enable verbose debug output
				    $mail->isSMTP();                                              // Send using SMTP
				    $mail->Host       = $host;                                    // Set the SMTP server to send through
				    $mail->SMTPAuth   = $smtpAuth;                                // Enable SMTP authentication
				    $mail->Username   = $userName;                                // SMTP username
				    $mail->Password   = $password;                                // SMTP password
				    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
				    $mail->Port       = $port_smtp;                               // TCP port to connect to
						$mail->CharSet = 'UTF-8';																			//UTF-8 Compatible

				    //Recipients
				    $mail->setFrom($setFrom_mail, $setFrom_name);
				    $mail->addAddress($setAddAddress1, $setAddAddress1_name);    // Add a recipient
				    $mail->addAddress($setAddAddress2);                          // Name is optional
				    $mail->addReplyTo($setFrom_mail, 'Reply Information, Not Authorized');
				    $mail->addCC($setAdd_CC);
				    $mail->addBCC($setAdd_BCC);

				    // Content
				    $mail->isHTML(true);                                       // Set email format to HTML
				    $mail->Subject = $mail_Subject;
				    $mail->Body    = $mail_Body;
				    $mail->AltBody = $mail_AltBody;

				    $mail->send();
				    echo '<br><pre>Enviamos un correo bien! Pero no hay Autorización para envios</pre>';
				} catch (Exception $e) {
				    echo "<br><pre>El mensage no se puede enviar. Mailer Error: {$mail->ErrorInfo} </pre>";
				}

}

//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Aqui enviamos el correo de facto, con la condición 'authorized' cumplida se envia a los posts
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝

if($authorized == 1){
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $host;                                  // Set the SMTP server to send through
    $mail->SMTPAuth   = $smtpAuth;                              // Enable SMTP authentication
    $mail->Username   = $userName;                              // SMTP username
    $mail->Password   = $password;                              // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = $port_smtp;                             // TCP port to connect to

    //Recipients
    $mail->setFrom($setFrom_mail, $setFrom_name);
    $mail->addAddress($setAddAddress1, $setAddAddress1_name);   // Add a recipient
    $mail->addAddress($setAddAddress2);                         // Name is optional
    $mail->addReplyTo($setFrom_mail, 'Reply Information');
    $mail->addCC($setAdd_CC);
    $mail->addBCC($setAdd_BCC);

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');           // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');      // Optional name

    // Content
    $mail->isHTML(true);                                       // Set email format to HTML
    $mail->Subject = $mail_Subject;
    $mail->Body    = $mail_Body;
    $mail->AltBody = $mail_AltBody;

    $mail->send();
    echo 'Enviamos un correo bien!';
} catch (Exception $e) {
    echo "El mensage no se puede enviar. Mailer Error: {$mail->ErrorInfo}";
}


}

}
