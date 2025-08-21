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
                        <img src="../../static/img/slides/cedis/header.jpg"  alt=""  
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
                            <h3 class="c-main-title c-font-55 c-font-bold 
                                       c-font-center c-font-uppercase 
                                       c-font-white c-block" 
                                       style="text-shadow: 1px 1px 4px #000000;"> 
                                CEDIS Y PUNTOS DE VENTA </h3>
                        </div>
                    </li>
                </ul>                    
            </div>
        </div>
    </section>

    <!--CEDIS-->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-l-filters-buttonCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todas
                        <div class="cbp-filter-counter"></div>
                    </div>
                   
                    <div data-filter=".cedis" class="cbp-filter-item"> Cedis
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".pdv" class="cbp-filter-item"> Puntos de venta
                        <div class="cbp-filter-counter"></div>
                    </div>     
                </div>
                <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">        
<?php
$sqlc  = " SELECT * ";
$sqlc .= " FROM cedis "; 
$sqlc .= " WHERE cedis.cedis_status > 0 ";
foreach($cnx->query($sqlc) as $row)
{ ?>                                          
                    <div class="cbp-item <?php if($row["cedis_es_cedis"]) { ?>cedis <?php } if($row["cedis_es_pdv"]) { ?>pdv <?php } ?>c-center">
                        <div class="cbp-caption">
                            <iframe src="<?php echo $row["cedis_iframe"]; ?>" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
                        <p class="c-font-bold c-font-uppercase">
                        <?php echo $row["cedis_nombre"]; ?><br>
                        <?php echo $row["cedis_direccion"]; ?><br>
                        TEL: <?php echo ($row["cedis_tel"]); ?></p>
                    </div>
<?php
} ?>
                </div>
                <div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
                    <a href="../../static/ajax/cedis/ver-mas.html" class="cbp-l-loadMore-link btn c-btn-square c-btn-border-2x c-btn-dark c-btn-bold c-btn-uppercase">
                        <span class="cbp-l-loadMore-defaultText">Ver más</span>
                        <span class="cbp-l-loadMore-loadingText">Cargando...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">No hay mas CEDIS ni PDV</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--FIN DE LOS CEDIS-->
<!--FIN DEL CONTENIDO-->   
</div>

<?php include('footer.php'); ?>
