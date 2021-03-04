<?php

define("mailremitente", "jardineriaprova@gmail.com");
define("maildestinatarioconsultas", "jordidaa@gmail.com");

//***************************************************
//***************************************************
//***************************************************
//***************************************************

$tablerow_count=0;


function EnvioCorreoHTML($remitent,$nom, $telefon)
{

	$missatge = '<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<p>Teniu una persona que ha vist la web i us passa el nom i el telèfon<p>Nom:';
	$missatge = $nom;
	$missatge .='</p>';
	$missatge .='<p> Telèfon:';
	$missatge .= $telefon;
	$missatge .='</p>';
 $missatge .='</body></html>';

	// Para enviar correo HTML, la cabecera Content-type debe definirse
	
	$cabeceras  = 'MIME-Version: 1.0' . "\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\n";
	// Cabeceras adicionales
	//$cabeceras .= 'Bcc: info@tiendazapatos.com' . "\n";
	
	// Enviarlo
	//mail($destinatario, $asunto, $mensaje, $cabeceras);
	//echo $mensaje;
	
/*	include("includes/class.phpmailer.php");
	include("includes/class.smtp.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
///////$mail->SMTPSecure = "ssl";

$mail->Host = "ayzweb.com";
$mail->Port = 25;
$mail->Username = "noresponder@ayzweb.com";
$mail->Password = "wedfkh2487jh2eg";

$mail->From = "noresponder@ayzweb.com";
$mail->FromName = "Tienda Zapatos 2";
$mail->Subject = $asunto;
$mail->AltBody = "Informacion de tiendazapatos";
$mail->MsgHTML($mensaje);

$mail->AddAddress($destinatario, "Destinatario");
$mail->IsHTML(true);


if(!$mail->Send()) {
  echo "Error: " . $mail->ErrorInfo;
} else {
  echo "Mensaje enviado.";
}*/
	
}
?>