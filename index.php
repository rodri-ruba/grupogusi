<?php include('header.php'); ?>

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">

	<!-- SLIDER INICIA -->
    <section class="c-layout-revo-slider c-layout-revo-slider-7">
        <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
            <div class="tp-banner rev_slider" data-version="5.0">
                <ul>

<?php
$sql = " SELECT * ";
$sql .= " FROM carrusel "; 
$sql .= " WHERE carrusel.carr_status = 1 ";
$sql .= " ORDER BY carrusel.carr_orden asc";
$i_slide = 1;
foreach($cnx->query($sql) as $row)
{ ?>
                    <li data-index="rs-<?php echo $i_slide; ?>" 
                        data-transition="slidingoverlayhorizontal" 
                        data-slotamount="default" 
                        data-hideafterloop="0" 
                        data-hideslideonmobile="off"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default"  
                        data-delay="4020"  
                        data-rotate="0"  
                        data-saveperformance="off"  
                        data-title="Cross Tamtoc">
                        <!-- IMAGEN PRINCIPAL -->
                        <img src="/imgs/slider/<?php echo ($row["carr_imagen"]); ?>"  alt=""  
                        data-bgposition="center center" 
                        data-bgfit="cover" data-bgrepeat="no-repeat" 
                        data-bgparallax="5" class="rev-slidebg" data-no-retina>                    

                        <div class="tp-caption tp-shape tp-shapewrapper " 
                            id="slide-138-layer-1" 
                            data-x="['center','center','center','center']" 
                            data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" 
                            data-voffset="['0','0','0','0']" 
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
                            data-transform_out="opacity:0;s:1000;" 
                            data-start="0" 
                            data-basealign="slide" 
                            data-responsive_offset="off" 
                            data-responsive="off"> 
                        </div>

                        <!-- TEXTO -->
                        <div class="tp-caption customin customout" 
                             data-x="center" data-y="center" 
                             data-voffset="-30" data-start="1500" 
                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                    data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;" 
                             data-splitin="none" 
                             data-splitout="none" data-elementdelay="0.1" 
                             data-endelementdelay="0.1" data-endspeed="600">
i                            <h3 class="c-main-title c-font-55 c-font-bold 
                                       c-font-center c-font-uppercase 
                                       c-font-white c-block" 
                                       style="text-shadow: 1px 1px 4px #000000;">
							<?php echo nl2br($row["carr_titulo"]); ?>
							</h3>
                        </div>
<?php
	if($row["carr_url"])
	{ // Si este slide enlaza a algún lugar ?>
                        <div class="tp-caption randomrotateout" data-x="center" 
                             data-y="center" data-hoffset="" 
                             data-voffset="120" 
                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                             data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Back.easeOut;" data-start="2000" data-easing="Back.easeOut">
                            <a href="<?php echo ($row["carr_url"]); ?>" class="c-action-btn btn btn-lg 
                            c-btn-square c-btn-border-2x c-btn-white 
                            c-btn-bold c-btn-uppercase">Ver más</a>
                        </div>
<?php
	} // Si este slide enlaza a algún lugar ?>
                    </li>

<?php
	$i_slide++;
} ?>
                                                
                </ul>
            </div>
        </div>
    </section>
   <!-- <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/franja-carrera-gusi.png')">
        <a href="https://www.marcate.com.mx/evento/SPTMCAR1724783588">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-center c-font-bold">7ª CARRERA ATLÉTICA DE GRUPO GUSI</h3>
                    <a href="https://www.marcate.com.mx/evento/SPTMCAR1724783588"><h5 class="c-font-uppercase btn btn-md c-btn-red">REGÍSTRATE AQUÍ</h5></a>
                </div>
            </div>
        </div>
        </a>
    </div>-->

    <!-- DIVISOR  AZUL DESPUES DEL SLIDE -->           
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/banner-facebook.jpg')">
        <a href="https://www.facebook.com/GrupoGusi/?fref=ts" target="_blank">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    SÍGUENOS EN FACEBOOK
                    </h3>
                    <i class="c-font-white c-center fa fa-facebook-official fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        </a>
    </div>          

<?php
$sql  = " SELECT * ";
$sql .= " FROM imagenes "; 
$sql .= " WHERE imagenes.img_id = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$img1 = $stmt->fetch();
?>
    <!-- IMAGENES DIVIDIDAS EN DOS -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-overlay-wrapper">
                            <div class="c-overlay-content">
                                <p class="c-font-white c-font-bold" style="margin-top:50%">
                               Encuentra las mejores recetas y consejos para preparar nuestros cortes.</p>
                                <a href="mi-gusi.php" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-2x c-btn-square">Ver más</a>
                            </div>
                        </div>
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('/imgs/uploads/<?php echo $img1["img_imagen"]; ?>');"></div>
                    </div>
                </div>
<?php
$sql  = " SELECT * ";
$sql .= " FROM imagenes "; 
$sql .= " WHERE imagenes.img_id = 2 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$img2 = $stmt->fetch();
?>
                 <div class="col-md-6 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-overlay-wrapper">
                            <div class="c-overlay-content">
                                <p class="c-font-white c-font-bold" style="margin-top:50%">Conoce todos nuestros cortes.</p>
                                <a href="productos.php" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-2x c-btn-square">Ver más</a>
                            </div>
                        </div>
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('/imgs/uploads/<?php echo $img2["img_imagen"]; ?>');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DIVISOR EN GRIS RECETAS -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/banner-recetas.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">RECETAS</h3>
                        <a href="recetas.php"><h5 class="c-font-uppercase btn btn-md c-btn-red">Ver más</h5></a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- RECETAS -->
    <div class="c-content-box c-overflow-hide c-bs-grid-reset-space">
        <div class="row">
<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_home = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 1 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec1 = $stmt->fetch();
?>
            <div class="col-md-6 wow animate fadeInDown">
                <div class="c-content-product-5 c-content-overlay">
                    <div class="c-overlay-wrapper">
                        <div class="c-overlay-content">
                            <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                <span class="c-font-thin">Receta</span>
                                <br/><?php echo $rec1["rec_nombre"]; ?></h3>
                            <a href="<?php echo liga_receta($rec1["rec_id"],$rec1["rec_url"]); ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver receta</a>
                        </div>
                    </div>                        
                    <div class="c-bg-img-center" style="height:800px;background-image: url('/imgs/recetas/<?php echo $rec1["rec_imagen"]; ?>')"></div>
                </div>
            </div>
<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_home = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 2 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec2 = $stmt->fetch();
?> 
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow animate fadeInUp">
                        <div class="c-content-product-5 c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                        <span class="c-font-thin">Receta</span>
                                        <br/><?php echo $rec2["rec_nombre"]; ?></h3>
                                    <a href="<?php echo liga_receta($rec2["rec_id"],$rec2["rec_url"]); ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver receta</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url('/imgs/recetas/<?php echo $rec2["rec_imagen"]; ?>');"></div>
                        </div>
                    </div>
<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_home = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 3 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec3 = $stmt->fetch();
?>
                    <div class="col-md-6 col-sm-6 wow animate fadeInRight">
                        <div class="c-content-product-5 c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                        <span class="c-font-thin">Receta</span>
                                        <br/><?php echo $rec3["rec_nombre"]; ?></h3>
                                    <a href="<?php echo liga_receta($rec3["rec_id"],$rec3["rec_url"]); ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver más</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url('/imgs/recetas/<?php echo $rec3["rec_imagen"]; ?>');"></div>
                        </div>
                    </div>
                </div>
<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_home = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 4 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec4 = $stmt->fetch();
?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="c-content-product-5 c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                        <span class="c-font-thin">Receta</span>
                                        <br/><?php echo $rec4["rec_nombre"]; ?></h3>
                                    <a href="<?php echo liga_receta($rec4["rec_id"],$rec4["rec_url"]); ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver más</a>
                                </div>
                            </div>
                            <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 400px; background-image: url('/imgs/recetas/<?php echo $rec4["rec_imagen"]; ?>');"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--TWITTER-->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/twitter.jpg')">
        <a href="https://twitter.com/grupogusi" target="_blank">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    SÍGUENOS EN TWITTER
                    </h3>
                    <i class="c-font-white c-center fa fa-twitter fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        </a>
    </div>            

    <!-- NOTICIAS -->
    <div class="c-content-fluid c-size-md c-bg-white" style="margin-bottom:0px">
        <div class="c-content-tile-grid c-bs-grid-reset-space" data-auto-height="true">
            <div class="c-content-title-1 wow animate fadeInDown c-center	">
                <br>
                <br>
                <h3 class="c-font-uppercase c-center c-font-bold">NOTICIAS</h3>
                <a href="noticias.php"><h5 class="c-font-uppercase btn btn-md c-btn-red">Ver más</h5></a>   
                <div class="c-line c-dot c-dot-center c-theme-bg c-theme-bg-after c-line-short"></div>
                <br>
                <br>
            </div>
            <div class="row wow animate fadeInUp">
                <!-- PRIMER BLOQUE -->

<?php
$sql  = " SELECT * ";
$sql .= " FROM noticias "; 
$sql .= " WHERE noticias.not_status > 0 ";
$sql .= " ORDER BY not_id DESC LIMIT 4"; 
$i = 1;
foreach($cnx->query($sql) as $not)
{
	if($i<=2)
	{ ?>

                <div class="col-md-6">
                    <div class="c-content-tile-1 c-bg-grey-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="c-tile-content c-arrow-left c-arrow-grey-2 c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="<?php echo liga_noticia($not["not_id"],$not["not_url"]); ?>">
                                                <i class="icon-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="c-image c-overlay-object" data-height="height" style="background-image: url('/imgs/noticias/<?php echo $not["not_imagen"]; ?>')"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?php echo liga_noticia($not["not_id"],$not["not_url"]); ?>">
                                <div class="c-tile-content c-content-v-center" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body c-center">
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"><?php echo $not["not_titulo"]; ?></h3>
                                            <p class="c-tile-body c-font-white"><?php echo $not["not_balazo"]; ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
<?php
	}
	else
	{ ?>
                <div class="col-md-6">
                    <div class="c-content-tile-1 c-bg-grey-2">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?php echo liga_noticia($not["not_id"],$not["not_url"]); ?>">
                                <div class="c-tile-content c-content-v-center" data-height="height">
                                    <div class="c-wrapper">
                                        <div class="c-body c-center">
                                            <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold c-font-white"><?php echo $not["not_titulo"]; ?></h3>
                                            <p class="c-tile-body c-font-white"><?php echo $not["not_balazo"]; ?>.</p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <div class="c-tile-content c-arrow-right c-arrow-grey-2 c-content-overlay">
                                    <div class="c-overlay-wrapper">
                                        <div class="c-overlay-content">
                                            <a href="<?php echo liga_noticia($not["not_id"],$not["not_url"]); ?>">
                                                <i class="icon-link"></i>
                                            </a>                                                    
                                        </div>
                                    </div>
                                    <div class="c-image c-overlay-object" data-height="height" style="background-image: url('/imgs/noticias/<?php echo $not["not_imagen"]; ?>')"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>		
<?php
	}
	$i++;
} ?>
            </div>
        </div>
    </div> 

    <!-- DIVISOR CORPORATIVO  -->
    <div class="c-content-box c-size-md wow animate fadeInLeft">
        <div class="container">
            <div class="c-content-counter-1">
                <div class="c-content-title-2">                            
                    <h3 class="c-center c-font-uppercase c-font-bold">CORPORATIVO</h3>
                </div>
            </div>
            <div id="container">
                <a href="responsabilidad-social.php">
                <div class="col-md-4 col-sm-6 c-center">
                <img src="static/img/inicio/corporativo/responsabilidad.jpg" style="width:100%; height:100%">
                </div>
                </a>
                <a href="grupo-gusi.php">
                <div class="col-md-4 col-sm-6 c-center">
                <img src="static/img/inicio/corporativo/grupo-gusi.jpg" style="width:100%; height:100%">
                </div>
                </a>
                <div class="col-md-4 col-sm-6 c-center">
                <a href="cedis.php"><img src="static/img/inicio/corporativo/cedis-y-puntos-de-venta.jpg" style="width:100%; height:100%"></a>
                </div>                                    
            </div>                
        </div>
    </div>

    <!--DIVISION DE RESPONSABILIDAD SOCIAL-->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/resp-social.jpg')">
        <a href="responsabilidad-social.php">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    CONOCE NUESTRAS ACCIONES DE RESPONSABILIDAD SOCIAL
                    </h3>
                    <a href="responsabilidad-social.php"><h5 class="c-font-uppercase btn btn-md c-btn-red">Ver más</h5></a>
                </div>
            </div>
        </div>
        </a>
    </div> 
    
    <!--CADENA DE PRODUCCION-->
    <div class="c-content-box c-size-md c-bg-parallax wow animate fadeInRight" 
         style="background-image:url('static/img/grupo_gusi/fondo.jpg')">
        <a href="procesos.php">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-content-title-1 c-margin-b-60">
                        <h3 class="c-center c-font-uppercase c-font-bold c-font-red-1"> PROCESO DE PRODUCCIÓN </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">           
                            <img src="static/img/inicio/paso-1.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">1. Compra y seleccion de ganado</div>
                        <div class="c-description c-font-17"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft" data-wow-delay="0.2s">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">
                            <img src="static/img/inicio/paso-2.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">2. Pastoreo</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.4s">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">
                           <img src="static/img/inicio/paso-3.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">3. Engorda intensiva</div>
                    </div>
                </div>
            </div>
            <!--SEGUNDA PARTE-->
            <div class="row">
                <div class="col-md-3 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">
                            <img src="static/img/inicio/paso-4.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">4. Planta de alimentos</div>
                        <div class="c-description c-font-17"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow animate fadeInLeft" data-wow-delay="0.2s">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">
                           <img src="static/img/inicio/paso-5.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">5. Proceso</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow animate fadeInLeft" data-wow-delay="0.4s">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">
                           <img src="static/img/inicio/paso-6.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">6. Comercialización nacional</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 wow animate fadeInLeft" data-wow-delay="0.4s">
                    <div class="c-content-step-1 c-opt-1">
                        <div class="c-icon">
                            <img src="static/img/inicio/paso-7.png">
                        </div>
                        <div class="c-title c-font-20 c-font-bold c-font-uppercase">7. Comercialización internacional</div>
                    </div>
                </div>
            </div>
        </div>
        </a>
    </div>

    <!--CLIENTES-->
    <div class="c-content-box c-size-md c-bg-white wow animate fadeInDown">
        <div class="container">
            <!-- Begin: Testimonals 1 component -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="2" data-auto-play="5000">
                <!-- Begin: Title 1 component -->
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold">Clientes</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <!-- End-->
                <!-- Begin: Owlcarousel -->
                <div class="owl-carousel owl-theme c-theme owl-bordered1">
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/walmart.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/soriana.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/pif-changs.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/burger.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/carls-jr.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/chillis.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/alsuper.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/arrachera-house.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/arteli.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/bafar.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/chedraui.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/city-market.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/comercial-mexicana.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/fresko.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/granjas-ryc.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/grupo-ibarra.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/la-comer.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/ley.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/merco.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="static/img/inicio/sigma.jpg" alt="" />
                        </a>
                    </div>
                </div>
                <!-- End-->
            </div>
            <!-- End-->
        </div>
    </div>                             

</div>

<?php include('footer.php'); ?>
