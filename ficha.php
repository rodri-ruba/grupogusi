<?php
include('config/bdpdo.php');
include('config/vars.php');
include('config/php.php');

$ficha_id = $_GET["ficha_id"];
$ip = $_SERVER['REMOTE_ADDR'];

$sql  = " SELECT * ";
$sql .= " FROM fichas_pdf "; 
$sql .= " WHERE fichas_pdf.ficha_id = '$ficha_id' ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$total_resultados = $stmt->rowCount();
if($total_resultados)
{
	$sql2  = " INSERT INTO `fichas_acceso` ( ";
	$sql2 .= " `fa_momento` , ";
	$sql2 .= " `ficha_id` , ";
	$sql2 .= " `ip` ";
	$sql2 .= " ) ";

	$sql2 .= " VALUES ( ";
	$sql2 .= " '$timestamp_now', ";
	$sql2 .= " '$ficha_id', ";
	$sql2 .= " '$ip' ";
	$sql2 .= " ) ";
	$stmt2 = $cnx->prepare($sql2);
	$stmt2->execute();
	$fa_id = $cnx->lastInsertId();

	$res01 = $stmt->fetch(PDO::FETCH_ASSOC);
	
	$file = "pdf-fichas/".$res01["ficha_pdf"];
	$filename = 'Custom file name for the.pdf'; /* Note: Always use .pdf at the end. */
	$filename = $res01["ficha_pdf"];
	
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename="' . $filename . '"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: ' . filesize($file));
	header('Accept-Ranges: bytes');
	
	@readfile($file);
	
}
else
{
	echo "No existe";
}


