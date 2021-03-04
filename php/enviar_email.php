<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$Telefono = $_POST['telefono']
$asunto = $_POST['asunto']
$mensaje = $_POST['mensaje'];

$para = 'jordidaa@gmail.com';
$titulo = 'Hola - La Webera';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono: $Telefon\n Asunto: $asunto\n Mensaje:\n $mensaje";
 
if ($_POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
echo 'El mensaje se ha enviado';
} else {
echo 'Falló el envio';
}
}
?>
