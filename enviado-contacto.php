<?php
session_start();

include('config/bdpdo.php');
include('config/vars.php');
include('config/php.php');

require('include/phpmailer/PHPMailerAutoload.php');

$cont_nombre = $_POST["cont_nombre"];
$cont_email = $_POST["cont_email"];
$cont_mensaje = $_POST["cont_mensaje"];
$cont_session_id = session_id();

$timestamp_compara = $timestamp_now + 60;

if($cont_nombre && $cont_email)
{
	$sql  = " SELECT * ";
	$sql .= " FROM contacto "; 
	$sql .= " WHERE contacto.cont_email = '$cont_email' "; 
	$sql .= " AND contacto.cont_momento <= '$timestamp_compara' ";
	$stmt = $cnx->prepare($sql);
	$stmt->execute();
	if($ya_existe = $stmt->rowCount())
	{
	}
	else
	{
		$sql  = " INSERT INTO `contacto` ( ";
		$sql .= " `cont_momento` , ";
		$sql .= " `cont_session_id` , ";
		$sql .= " `cont_nombre` , ";
		$sql .= " `cont_email` , ";
		$sql .= " `cont_mensaje` ";
		$sql .= " ) ";
		
		$sql .= " VALUES ( ";
		$sql .= " '$timestamp_now' , ";
		$sql .= " '$cont_session_id' , ";
		$sql .= " '$cont_nombre' , ";
		$sql .= " '$cont_email' , ";
		$sql .= " '$cont_mensaje' ";
		$sql .= " ) ";
		$stmt = $cnx->prepare($sql);
		$stmt->execute();
		$cont_id = $cnx->lastInsertId();
	
		$mail_msg = $mail_msg_header;
		$mail_msg .= '<table cellpadding=1 cellspacing=0 align=center valign=middle >
		<tr>
			<td><font style="font-size:14px; font-family: Arial, sans-serif;">
			Nuevo formulario de contacto enviado:
			<p align="justify">
			<b>Fecha y Hora</b>:<br>'.$timestamp_now_letra.'<br><br>
			<b>Nombre</b>:<br>'.$cont_nombre.'<br><br>
			<b>Email</b>:<br>'.$cont_email.'<br><br>
			<b>Mensaje</b>:<br>'.nl2br($cont_mensaje).'<br><br>
			</td>
		</tr>
		</table>';
		$mail_msg .= $mail_msg_footer;
		
		$mail_subject = "Grupo Gusi: Formulario de contacto enviado"; 
		
		$mail = new PHPMailer;
		$mail->Host= PHPMAILER_HOST;
		$mail->Port= PHPMAILER_PORT;
		$mail->Username = PHPMAILER_USER;
		$mail->Password = PHPMAILER_PASS;
		$mail->SMTPKeepAlive = true;  
		$mail->Mailer = "smtp"; 
		$mail->isSMTP();
		//$mail->SMTPDebug = 0;
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth = true;
		$mail->setFrom(PHPMAILER_FROM_MAIL, PHPMAILER_FROM_NAME);
		$mail->addAddress("contacto@grupogusi.com", ("Contacto Grupo Gusi"));
		$mail->AddBCC(PHPMAILER_TOINT_MAIL, PHPMAILER_TOINT_NAME);
		$mail->Subject = utf8_decode($mail_subject);
		$mail->msgHTML(utf8_decode($mail_msg));
		if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; } else { echo ""; }
		//mail($mail_to_interno, $mail_subject, $mail_msg, $mail_headers);
	}
} ?>
<div>
Muchas gracias por enviarnos tus datos.
</div>
