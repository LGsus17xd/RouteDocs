<html>
<head>
<title>Enviado</title>
<meta charset="UTF-8"/>
<link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="contes.css" type="text/css"/>
</head>

<body>
<center>
<h1>Contactanos</h1>
<?php 
$myemail = 'a309101alumnos.uaslp.mx';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
<form method="post" action="enviar.php">
<input type="text" name="nombre" placeholder="NOMBRE">
<input type="email" name="email" placeholder="CORREO">
<br>
<textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
<br>
<input type="submit" value="ENVIAR">
</form>
</center>
</body>
</html>