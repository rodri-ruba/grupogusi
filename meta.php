<?php
$og_title = "La mejor carne de México.";
$og_description = "Producir, procesar y comercializar productos cárnicos de bovino y derivados, con calidad y precios competitivos para tiendas de autoservicios y consumidores finales de acuerdo a las normas nacionales e internacionales, cumpliendo la entrega en tiempo y forma.";
$og_image = "http://grupogusi.com.mx/static/img/logo-centro.png";
$og_type = "website";

if(substr_count($_SERVER['PHP_SELF'],"cross-tamtoc-2018.php"))
{ 
	$og_title = "CROSS TAMTOC 2018";
	$og_description = "Participa en la GUSI CROSS TAMTOC y celebra 50 años juntos.";
	$og_type = "article";
	$og_image = "http://www.grupogusi.com.mx/imgs/slider/slider_1_1536441909.jpg";
}
$url_actual_completo = "http://grupogusi.com.mx/".$_SERVER['REQUEST_URI'];
?>
<meta property="og:site_name" content="Grupo Gusi"/>
<meta property="og:url" content="<?php echo $url_actual_completo; ?>" />
<meta property="og:type" content="<?php echo $og_type; ?>" />
<meta property="og:title" content="<?php echo $og_title; ?>" />
<meta property="og:description" content="<?php echo $og_description; ?>" />
<meta property="og:image" content="<?php echo $og_image; ?>" />
	