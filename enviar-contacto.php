<?php

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];


$email_to = 'tucorreo@dominio.extension';
$email_subject = "Desde WebSite: ". $_POST['asunto'];

// Preparamos el cuerpo del mensaje
$email_message = "Detalles del formulario de contacto:"."<br><br>";
$email_message .= "Nombre: " . $_POST['nombre']. "<br>";
$email_message .= "E-mail: " . $_POST['correo'] . "<br>";
$email_message .= "Comentarios: " . $_POST['mensaje'] . "<br><br>";


// Ahora se envía el e-mail usando la función mail() de PHP
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'From: '.$nombre.' <'.$correo.'>'."\r\n";
//$cabeceras .= 'Cc: otro@correo.mas' . "\r\n";


@mail($email_to, utf8_decode($email_subject), utf8_decode($email_message), utf8_decode($cabeceras));

header ("location: conversemos.php?msn=1");
?>
