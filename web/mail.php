<?php

require 'class.phpmailer.php';
$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = 0; // Enable verbose debug output

    $mail->isSMTP(); // Set mailer to use SMTP

    $mail->SMTPAuth = true; // enable SMTP authentication

    $mail->SMTPSecure = "ssl";

    $mail->Port = 465; // TCP port to connect to

    $mail->SMTPOptions = array(

'ssl' => array(

'verify_peer' => false,

'verify_peer_name' => false,

'allow_self_signed' => true
)

);

$mail->Host = "smtp.strato.de"; // SMTP server

$mail->Username = "noReply@fam-buttke.de"; // SMTP account username

$mail->Password = "jjj5W9DLOEkT0cnhcV6C"; // SMTP account password

$mail->setFrom('service@cfh-lounge.de', 'CfH Lounge-Service');

$mail->send();
echo 'Nachricht wurde versendet'

} catch (Exception $exception) {

\Logging\Mail::getLogger()->error("Mailserver nicht erreichbar");

$mail = null;

}
?>