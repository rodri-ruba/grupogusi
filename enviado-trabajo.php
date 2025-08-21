<?php
session_start();

include('config/bdpdo.php');
include('config/vars.php');
include('config/php.php');

require('include/phpmailer/PHPMailerAutoload.php');

$trab_nombre = $_POST["trab_nombre"];
$trab_email = $_POST["trab_email"];
$trab_estado = $_POST["trab_estado"];
$trab_areas = $_POST["trab_areas"];
$trab_comentarios = $_POST["trab_comentarios"];

$trab_session_id = session_id();

$timestamp_compara = $timestamp_now + 60;

if($trab_nombre && $trab_email)
{
	$sql  = " SELECT * ";
	$sql .= " FROM trabajo "; 
	$sql .= " WHERE trabajo.trab_email = '$trab_email' "; 
	$sql .= " AND trabajo.trab_momento <= '$timestamp_compara' ";
	$stmt = $cnx->prepare($sql);
	$stmt->execute();
	if($ya_existe = $stmt->rowCount())
	{
	}
	else
	{
		$sql  = " INSERT INTO `trabajo` ( ";
		$sql .= " `trab_momento` , ";
		$sql .= " `trab_session_id` , ";
		$sql .= " `trab_nombre` , ";
		$sql .= " `trab_email` , ";
		$sql .= " `trab_estado` , ";
		$sql .= " `trab_areas` , ";
		$sql .= " `trab_comentarios` ";
		$sql .= " ) ";
		
		$sql .= " VALUES ( ";
		$sql .= " '$timestamp_now' , ";
		$sql .= " '$trab_session_id' , ";
		$sql .= " '$trab_nombre' , ";
		$sql .= " '$trab_email' , ";
		$sql .= " '$trab_estado' , ";
		$sql .= " '$trab_areas' , ";
		$sql .= " '$trab_comentarios' ";
		$sql .= " ) ";
		$stmt = $cnx->prepare($sql);
		$stmt->execute();
		$trab_id = $cnx->lastInsertId();
	
		$mail_msg = $mail_msg_header;
		$mail_msg .= '<table cellpadding=1 cellspacing=0 align=center valign=middle >
		<tr>
			<td><font style="font-size:14px; font-family: Arial, sans-serif;">
			Nuevo formulario de trabajo enviado:
			<p align="justify">
			<b>Fecha y Hora</b>:<br>'.$timestamp_now_letra.'<br><br>
			<b>Nombre</b>:<br>'.$trab_nombre.'<br><br>
			<b>Email</b>:<br>'.$trab_email.'<br><br>
			<b>Estado</b>:<br>'.$trab_estado.'<br><br>
			<b>Areas</b>:<br>'.$trab_areas.'<br><br>
			<b>Comentarios</b>:<br>'.nl2br($trab_comentarios).'<br><br>
			</td>
		</tr>
		</table>';
		$mail_msg .= $mail_msg_footer;
		
		$mail_subject = "Grupo Gusi: Formulario de trabajo enviado"; 
		
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
		$mail->addAddress("recursoshumanos@grupogusi.com", utf8_decode("Recursos Humanos"));
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