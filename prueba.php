<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
require 'constantes.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    
    $mail->Username = 'daninnunez27@gmail.com';
    $mail->Password = EMAIL_PASSWORD;
    
    $mail->SMTPSecure = 'tls';
    $mail->Port = 25;


    $mail->setFrom('daninnunez27@gmail.com');

    $mail->addAddress('daninnunez27@gmail.com');

    $mail->Subject = "Portafolio";

    $correo= $_POST["correo"];
    $comentario= $_POST["comentario"];
    $contenido = "Correo: " . $correo . "\nComentario: " . $comentario;

    $mail->Body = $contenido;

    $mail->send();
} catch (Exception $exception) {
    echo 'Algo salio mal', $exception->getMessage();
}
?>