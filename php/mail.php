<?php
error_reporting(0);


require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['email'];
  $epresa =  $_POST['name'];
  $redes = $_POST['redes'];
  $caso = $_POST['caso'];
  $inte = $_POST['radio-grp'];
  $asunto = "Solicitud de un demo";
  $mensaje = "Hola, el usuario ".$nombre." de la empresa ".$epresa." nos ha solicitado un demo de ".$caso." para ".$redes." y su correo es: ".$correo." y su telefono: ".$telefono." y ".$inte." se va a integrar a una plataforma";

$mail = new PHPMailer;
$mail->setFrom('admin@example.com');
$mail->addAddress('saitocorreo@gmail.com');
$mail->AddAddress('ruben.garcia@springlabs.net');
//$mail->AddAddress('maria.zendejas@springlabs.net');
$mail->AddAddress('antonio.escobar@springlabs.net');
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


