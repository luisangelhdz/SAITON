<?php
error_reporting(0);
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php'; 
 //echo "Se esta resiviendo parametros <br>";
  $nombre = $_POST['contact_nom'];
  $epresa = $_POST['empresa_nom'];
  $correo = $_POST['contact_email'];
  $mesaje =  $_POST['contact_message'];
  $asunto = "Poncerse en contacto con";
  $mensaje = "Hola, el usuario".$nombre." de la empresa ".$epresa." se ha puesto en contacto para ".$mesaje." y su correo es: ".$correo;

$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('saitocorreo@gmail.com');
$mail->AddAddress('ruben.garcia@springlabs.net');
//$mail->AddAddress('maria.zendejas@springlabs.net');
$mail->AddAddress('antonio.escobar@springlabs.net');
//$mail->AddAddress('luismx1123@gmail.com');
$mail->Subject = $asunto;
$mail->Body = $mensaje;

$mail->isHTML(true);
$mail->AltBody = $asunto;
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'saitocorreo@gmail.com';
$mail->Password = 'saito2019';
if(!$mail->send()) {
  echo '0';
  //echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo '1';
}
	
?>
