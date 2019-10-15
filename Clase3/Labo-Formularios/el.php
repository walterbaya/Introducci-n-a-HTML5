<?php
$name = 'nombre';
$email = $_POST['email'];
$message = $_POST['consulta'];
$to = 'walterbaya@yahoo.com';
$email_subject = "Nuevo mensaje: de la web";
$email_body = "Haz recibido un nuevo mensaje. \n <strong>Nombre:</strong> $name \n Correo:
$email \n Mensaje o consulta: \n $message \n Consulta por el siguiente producto: $opcion \n";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo 'Pronto nos estaremos comunicando con usted!'
?>