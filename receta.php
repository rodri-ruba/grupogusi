<?php include('header.php'); ?>

<?php
$rec_id = $_GET["rec_id"];

$sql  = " SELECT * ";
$sql .= " FROM recetas "; 
$sql .= " JOIN admins "; 
$sql .= " ON recetas.rec_upd_adm_id = admins.adm_id ";
$sql .= " WHERE recetas.rec_id = '$rec_id' ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec0a = $stmt->fetch();
?>

<style type="text/css">
.tp-caption {
	white-space: normal !important;
}	
</style>

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
                        data-thumb="/imgs/recetas/<?php echo $rec0a["rec_thumb"]; ?>"  
                        data-delay="4330"  
                        data-rotate="0"  
                        data-saveperformance="off"  
                        data-title="Unlock Power">
                        <!-- IMAGEN PRINCIPAL -->
                        <img src="/imgs/recetas/<?php echo $rec0a["rec_imagen"]; ?>"  
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
                        
                        <!-- TEXTO -->
                        <div class="tp-caption customin customout" 
                             data-x="center" data-y="center" 
                             data-voffset="-30" data-start="1500" 
                             data-transform_in="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;"
                    data-transform_out="x:0;y:0;z:0;rX:0.5;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;s:600;e:Power2.easeInOut;" 
                             data-splitin="none" 
                             data-splitout="none" data-elementdelay="0.1" 
                             data-endelementdelay="0.1" data-endspeed="600"
	                         >
                            <h3 class="c-main-title c-font-55 c-font-bold 
                                       c-font-center c-font-uppercase 
                                       c-font-white c-block" 
                                       style="text-shadow: 1px 1px 4px #000000;"> 
                            <?php echo $rec0a["rec_nombre"]; ?>
                            </h3>
                        </div>        
                    </li>
                </ul>                    
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-7">
            <div class="cbp-l-project-desc-title"><span>Instrucciones</span></div>
            <ol>
<?php
$sqlp  = " SELECT * ";
$sqlp .= " FROM recetas_preparacion "; 
$sqlp .= " WHERE recetas_preparacion.rp_status > 0 ";
$sqlp .= " AND recetas_preparacion.rec_id = '$rec_id' ";
$sqlp .= " ORDER BY rp_orden ASC "; 
foreach($cnx->query($sqlp) as $row)
{ ?><li><?php echo $row["rp_preparacion"]; ?></li><?php } ?>
            </ol>
<?php
$sqlt  = " SELECT * ";
$sqlt .= " FROM recetas_tips "; 
$sqlt .= " WHERE recetas_tips.rt_status > 0 ";
$sqlt .= " AND recetas_tips.rec_id = '$rec_id' ";
$stmt = $cnx->prepare($sqlt);
if($stmt->rowCount())
{ ?>
            <div class="cbp-l-project-desc-text">
<?php
	foreach($cnx->query($sqlt) as $row)
	{ ?>
	            Tip: <?php echo $row["rt_tip"]; ?>
<?php
	} ?>            
			</div>
<?php
} ?>
        </div>
        <div class="col-md-5">
            <div class="cbp-l-project-details-title"><span>Ingredientes</span></div>
            <ul class="cbp-l-project-details-list">
<?php
$sqli  = " SELECT * ";
$sqli .= " FROM recetas_ingredientes "; 
$sqli .= " WHERE recetas_ingredientes.ri_status > 0 ";
$sqli .= " AND recetas_ingredientes.rec_id = '$rec_id' ";
$sqli .= " ORDER BY rec_id ASC "; 
foreach($cnx->query($sqli) as $row)
{ ?><li><?php echo $row["ri_ingrediente"]; ?></li><?php } ?> 
            </ul>                 
        </div>
    </div>           
<!--FIN-->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
 <div class="c-content-box c-size-md">
    <div class="container c-center">
        <div class="c-content-counter-1 wow animate fadeInDown">
            <div class="c-content-title-2 c-center">
                <h3 class="c-font-uppercase c-font-red-1 c-font-bold">
                Comparte
                </h3>
            </div>
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="my_centered_buttons">
                <a class="a2a_button_facebook a2a_counter"></a>
                <a class="a2a_button_pinterest a2a_counter"></a>
                <a class="a2a_button_tumblr a2a_counter"></a>                        
                <a class="a2a_dd a2a_counter" href="https://www.addtoany.com/share"></a>
            </div>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>
    </div>
</div>

<div class="c-content-box c-size-md">
    <div class="container">
        <div class="c-content-counter-1 wow animate fadeInUp">
            <div class="c-content-title-2">
                <h3 class="c-font-uppercase c-font-red-1 c-font-bold">
                Déjanos un comentario
                </h3>
            </div>
            <div id="disqus_thread"></div>
            <script>
               (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//grupogusi.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to 
                      view the <a href="https://disqus.com/?ref_noscript">
                      comments powered by Disqus.</a>
            </noscript> 
        </div>
    </div>
</div>

<?php include('footer.php'); ?>
