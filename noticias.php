<?php include('header.php'); ?>

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <section class="c-layout-revo-slider c-layout-revo-slider-7">
        <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile">
            <div class="tp-banner rev_slider" data-version="5.0">
                <ul>    <!-- SLIDE  -->
                    <li 
                        data-index="rs-46" 
                        data-transition="slidingoverlayhorizontal" 
                        data-slotamount="default" 
                        data-hideafterloop="0" 
                        data-hideslideonmobile="off"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default"  
                        data-thumb="/static/img/slides/noticias/noticias-header.jpg"  
                        data-delay="4330"  
                        data-rotate="0"  
                        data-saveperformance="off"  
                        data-title="Unlock Power">
                        <!-- MAIN IMAGE -->
                        <img src="static/img/slides/noticias/noticias-header.jpg"  
                        alt=""  data-bgposition="center center" 
                        data-bgfit="cover" data-bgrepeat="no-repeat" 
                        data-bgparallax="5" class="rev-slidebg" 
                        data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper " 
                            id="slide-46-layer-1" 
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
    <!--DIVISION DESPUES DEL SLIDE-->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/grupo_gusi/nuestra-gente.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2">
                    <h3 class="c-center c-font-uppercase c-font-white c-font-bold">TE MANTENEMOS INFORMADO</h3>
                    <div class="c-line c-dot c-dot-center c-theme-bg c-theme-bg-after c-line-short"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="c-content-box c-size-md">
        <div class="container">
            <!-- Begin: Cubeportfolio grid -->
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-l-filters-buttonCenter wow fadeInLeft">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todas
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".tecnologia" class="cbp-filter-item"> Tecnologia
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".mercado" class="cbp-filter-item"> Mercado
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".ganado" class="cbp-filter-item"> Ganado
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".sc" class="cbp-filter-item"> Sin clasificar
                        <div class="cbp-filter-counter"></div>
                    </div>                            
                </div>
                <div id="grid-container" class="cbp cbp-l-grid-masonry-projects">
                    
<?php
$sql  = " SELECT * ";
$sql .= " FROM noticias "; 
$sql .= " WHERE noticias.not_status > 0 ";
$sql .= " ORDER BY not_id DESC "; 
foreach($cnx->query($sql) as $row)
{ ?> 
                    <div class="cbp-item 
<?php if($row["not_cat_tecnologia"]>0) { ?> tecnologia<?php } ?>
<?php if($row["not_cat_mercado"]>0) { ?> mercado<?php } ?>
<?php if($row["not_cat_ganado"]>0) { ?> ganado<?php } ?>
<?php if(!$row["not_cat_tecnologia"] && !$row["not_cat_mercado"] && !$row["not_cat_ganado"]>0) { ?> sc<?php } ?>
		            ">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                                <img src="/imgs/noticias/<?php echo ($row["not_thumb"]); ?>" alt=""> </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="c-masonry-border"></div>
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <?php /* <a href="/noticia.php?not_id=<?php echo $row["not_id"]; ?>&" */ ?>
										<a href="<?php echo liga_noticia($row["not_id"],$row["not_url"]); ?>" 
                                        class="cbp-l-caption-buttonLeft btn 
                                               c-btn-square c-btn-border-1x c-btn-white 
                                               c-btn-bold c-btn-uppercase">
                                          Ver más
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php /* <a href="/noticia.php?not_id=<?php echo $row["not_id"]; ?>&" */ ?>
                        <a href="<?php echo liga_noticia($row["not_id"],$row["not_url"]); ?>"
                           class="cbp-l-grid-masonry-projects-title">
                           <?php echo $row["not_titulo"]; ?>
                        </a>
                        <div class="cbp-l-grid-masonry-projects-desc">
                           <?php echo $row["not_balazo"]; ?>
                        </div>
                    </div>
<?php
} ?>
                </div>
                <div id="loadMore-container" class="cbp-l-loadMore-button c-margin-t-60">
                    <a href="static/ajax/noticias/ver-mas.html" class="cbp-l-loadMore-link btn c-btn-square c-btn-border-2x c-btn-dark c-btn-bold c-btn-uppercase">
                        <span class="cbp-l-loadMore-defaultText">Vér más</span>
                        <span class="cbp-l-loadMore-loadingText">Cargando...</span>
                        <span class="cbp-l-loadMore-noMoreLoading">No hay mas noticias</span>
                    </a>
                </div>
            </div>
            <!-- End-->
        </div>
    </div>            
</div>

<?php include('footer.php'); ?>
