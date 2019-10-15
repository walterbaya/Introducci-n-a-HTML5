<?php 
//captura de variables

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$consulta=$_POST['consulta'];

//cuerpo del email

$mensaje="
<strong>Nombre:</strong> $nombre<br/><br/>
<strong>email:</strong> $email <br/> <br/>
<strong>consulta:</strong> $consulta<br/><br/>
";

//envio del email
mail("info@miweb.com.ar","consulta web site", $mensaje,"from: $nombre <$mail>\nReply-To:$mail\nContent-Type:text/html; charset=iso-8859-1\n");


?>