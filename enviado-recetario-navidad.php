<?php
session_start();

include('config/bdpdo.php');
include('config/vars.php');
include('config/php.php');

require('include/phpmailer/PHPMailerAutoload.php');

$rec_nombre = $_POST["rec_nombre"];
$rec_email = $_POST["rec_email"];
$rec_estado = $_POST["rec_estado"];
$rec_corte = $_POST["rec_corte"];
$rec_session_id = session_id();

$timestamp_compara = $timestamp_now + 60;

if($rec_nombre && $rec_email)
{
	$sql  = " SELECT * ";
	$sql .= " FROM recetario_navidad "; 
	$sql .= " WHERE recetario_navidad.rec_email = '$rec_email' "; 
	$sql .= " AND recetario_navidad.rec_momento <= '$timestamp_compara' ";
	$stmt = $cnx->prepare($sql);
	$stmt->execute();
	if($ya_existe = $stmt->rowCount())
	{
	}
	else
	{
		$sql  = " INSERT INTO `recetario_navidad` ( ";
		$sql .= " `rec_momento` , ";
		$sql .= " `rec_session_id` , ";
		$sql .= " `rec_nombre` , ";
		$sql .= " `rec_email` , ";
		$sql .= " `rec_estado` , ";
		$sql .= " `rec_corte` ";
		$sql .= " ) ";
		
		$sql .= " VALUES ( ";
		$sql .= " '$timestamp_now' , ";
		$sql .= " '$rec_session_id' , ";
		$sql .= " '$rec_nombre' , ";
		$sql .= " '$rec_email' , ";
		$sql .= " '$rec_estado' , ";
		$sql .= " '$rec_corte' ";
		$sql .= " ) ";
		$stmt = $cnx->prepare($sql);
		$stmt->execute();
		$rec_id = $cnx->lastInsertId();
	
		$mail_msg = $mail_msg_header;
		$mail_msg .= '<table cellpadding=1 cellspacing=0 align=center valign=middle >
		<tr>
			<td><font style="font-size:14px; font-family: Arial, sans-serif;">
			Nueva descarga de recetario navideño:
			<p align="justify">
			<b>Fecha y Hora</b>:<br>'.$timestamp_now_letra.'<br><br>
			<b>Nombre</b>:<br>'.$rec_nombre.'<br><br>
			<b>Email</b>:<br>'.$rec_email.'<br><br>
			<b>Estado</b>:<br>'.$rec_estado.'<br><br>
			<b>Corte de res favorito</b>:<br>'.$rec_corte.'<br><br>
			</td>
		</tr>
		</table>';
		$mail_msg .= $mail_msg_footer;
		
		$mail_subject = "Grupo Gusi: Descarga de recetario navideño"; 
		
		$mail = new PHPMailer;
		$mail->Host= PHPMAILER_HOST;
		$mail->Port= PHPMAILER_PORT;
		$mail->Username = PHPMAILER_USER;
		$mail->Password = PHPMAILER_PASS;
		$mail->SMTPKeepAlive = true;  
		$mail->Mailer = "smtp"; 
		$mail->isSMTP();
		$mail->SMTPSecure = 'ssl';
		$mail->SMTPAuth = true;
		$mail->setFrom(PHPMAILER_FROM_MAIL, PHPMAILER_FROM_NAME);
		$mail->addAddress("contacto@grupogusi.com", utf8_decode("Contacto Grupo Gusi"));
		$mail->AddBCC(PHPMAILER_TOINT_MAIL, PHPMAILER_TOINT_NAME);
		$mail->Subject = utf8_decode($mail_subject);
		$mail->msgHTML(utf8_decode($mail_msg));
		if(!$mail->send()) { echo ""; } else { echo ""; }
	}
} ?>
<div>
	<p class="c-price c-font-white c-font-thin">
		Muchas gracias por enviarnos tus datos.
		<br><br>
		Por favor haz click en el siguiente botón para descargar el recetario navideño:
	</p>
	
	<a href="/pdf-recetario/recetario_grupo_gusi_navidad.pdf" target="_blank" class="btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" style="position: relative !important; bottom: 0; margin-top: 15px;">Descargar</a>
</div>
