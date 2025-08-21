<?php include('header.php'); ?>

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
<section class="c-layout-revo-slider c-layout-revo-slider-7">
    <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>    <!-- SLIDE  -->
                <li data-index="rs-38" 
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
                    data-title="Carnes Gusi">
                    <!-- IMAGEN PRINCIPAL -->
                    <img src="static/img/slides/cortes/header-productos.jpg"  alt=""  
                    data-bgposition="center center" 
                    data-bgfit="cover" data-bgrepeat="no-repeat" 
                    data-bgparallax="5" class="rev-slidebg" data-no-retina>                    

                    <div class="tp-caption tp-shape tp-shapewrapper " 
                        id="slide-38-layer-1" 
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
                </li>
            </ul>                    
        </div>
    </div>
</section>

<div class="c-content-box c-size-md wow animate fadeInRight">
    <div class="container">

        <div class="c-content-counter-1">

            <div class="c-content-title-2">
                <h3 class="c-center c-font-uppercase c-theme-font c-font-bold">FICHAS T&Eacute;CNICAS</h3>
            </div>

	        <div class="col-md-6">
		        <h3 class="c-left c-font-uppercase c-theme-font c-font-bold">PRODUCTOS MEJORADOS</h3>
	            <ul>
<?php
$sqlp  = " SELECT * ";
$sqlp .= " FROM fichas_pdf "; 
$sqlp .= " WHERE ficha_categoria = 'PRODUCTOS MEJORADOS' ";
$sqlp .= " AND ficha_pdf <> '' ";
foreach($cnx->query($sqlp) as $row)
{ ?><li><a href="/pdf-fichas/<?php echo utf8_encode($row["ficha_pdf"]); ?>" target="_blank"><?php echo utf8_encode($row["ficha_nombre"]); ?></a></li><?php } ?>
	            </ul>
			</div>

	        <div class="col-md-6">
		        <h3 class="c-left c-font-uppercase c-theme-font c-font-bold">VALOR AGREGADO</h3>
	            <ul>
<?php
$sqlp  = " SELECT * ";
$sqlp .= " FROM fichas_pdf "; 
$sqlp .= " WHERE ficha_categoria = 'VALOR AGREGADO' ";
$sqlp .= " AND ficha_pdf <> '' ";
foreach($cnx->query($sqlp) as $row)
{ ?><li><a href="/pdf-fichas/<?php echo utf8_encode($row["ficha_pdf"]); ?>" target="_blank"><?php echo utf8_encode($row["ficha_nombre"]); ?></a></li><?php } ?>
	            </ul>
			</div>

        </div>
    </div>
</div>


<?php include('footer.php'); ?>