<?php include('header.php'); ?>

<style type="text/css">
.atp-caption {
	white-space: normal !important;
}	
</style>

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
                        <img src="static/img/slides/recetas/recetas-header.jpg"  alt=""  
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

                        <!-- TEXTO -->
                        <div class="tp-caption customin customout" 
                             data-x="center" data-y="center" 
                             data-voffset="-30" data-start="1500" 
                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                    data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;" 
                             data-splitin="none" 
                             data-splitout="none" data-elementdelay="0.1" 
                             data-endelementdelay="0.1" data-endspeed="600">
                            <h3 class="c-main-title c-font-50 c-font-bold 
                                       c-font-center c-font-uppercase 
                                       c-font-white c-block" 
                                       style="text-shadow: 1px 1px 4px #000000;"> 
                                RECETAS GUSI  <br>PREPARADAS CON LA MEJOR<br>CARNE DE MÉXICO </h3>
                        </div>
                    </li>
                </ul>                    
            </div>
        </div>
    </section>
    <!--DIVISION DESPUES DEL SLIDE-->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/banner-recetas.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2">
                    <h3 class="c-center c-font-uppercase c-font-white c-font-bold">Nuestros mejores cortes preparados con las mejores recetas </h3>
                    <div class="c-line c-dot c-dot-center c-theme-bg c-theme-bg-after c-line-short"></div>
                </div>
            </div>
        </div>
    </div>
    <!--RECETAS-->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-l-filters-buttonCenter">
                     <!--filtros
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todas
                        <div class="cbp-filter-counter"></div>
                    </div>
                   
                    <div data-filter=".identity" class="cbp-filter-item"> Identity
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item"> Web Design
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item"> Graphic
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".logos" class="cbp-filter-item"> Logo
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".logos, .graphic" class="cbp-filter-item"> Logo & Graphic
                        <div class="cbp-filter-counter"></div>
                    </div>
                    -->
                </div>
                <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">

<?php
$sql  = " SELECT * ";
$sql .= " FROM recetas "; 
$sql .= " WHERE recetas.rec_status > 0 ";
$sql .= " ORDER BY rec_id DESC "; 
foreach($cnx->query($sql) as $row)
{ ?>                                          
                    <div class="cbp-item">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/imgs/recetas/<?php echo ($row["rec_thumb"]); ?>" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="c-masonry-border"></div>
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <a href="<?php echo liga_receta($row["rec_id"],$row["rec_url"]); ?>"
                                        class="cbp-l-caption-buttonLeft 
                                        btn c-btn-square c-btn-border-1x c-btn-white 
                                        c-btn-bold c-btn-uppercase">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo liga_receta($row["rec_id"],$row["rec_url"]); ?>" 
                        class="cbp-l-grid-masonry-projects-title">
                          <?php echo $row["rec_nombre"]; ?>
                        </a>
                    </div>
<?php
} ?>
                </div>
<?php /*
                <div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
                    <a href="static/ajax/recetas/ver-mas.html" class="cbp-l-loadMore-link btn c-btn-square c-btn-border-2x c-btn-dark c-btn-bold c-btn-uppercase">
                        <span class="cbp-l-loadMore-defaultText">Ver más</span>
                        <span class="cbp-l-loadMore-loadingText">Cargando...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">No hay mas recetas</span>
                    </a>
                </div>
*/ ?>
            </div>
        </div>
    </div>
    <!--FIN DE LAS RECETAS-->
<!--FIN DEL CONTENIDO-->   
</div>

<?php include('footer.php'); ?>
