<?php include('header.php'); ?>

<?php
$not_id = $_GET["not_id"];

$sql  = " SELECT * ";
$sql .= " FROM noticias "; 
$sql .= " WHERE noticias.not_status > 0 ";
$sql .= " AND noticias.not_id = '$not_id' "; 
$qry = $cnx->prepare($sql);
$qry->execute();
$res = $qry->fetch();

$text = $res["not_titulo"];

$splitstring1 = substr($text, 0, floor(strlen($text) / 2));
$splitstring2 = substr($text, floor(strlen($text) / 2));

if (substr($splitstring1, 0, -1) != ' ' AND substr($splitstring2, 0, 1) != ' ')
{
    $middle = strlen($splitstring1) + strpos($splitstring2, ' ') + 1;
}
else
{
    $middle = strrpos(substr($text, 0, floor(strlen($text) / 2)), ' ') + 1;    
}

$string1 = substr($text, 0, $middle);  // "The Quick : Brown Fox Jumped "
$string2 = substr($text, $middle);  // "Over The Lazy / Dog"

?> 

<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
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
                        data-thumb="/imgs/noticias/<?php echo $res["not_thumb"]; ?>"  
                        data-delay="4330"  
                        data-rotate="0"  
                        data-saveperformance="off"  
                        data-title="Unlock Power">
                        <!-- IMAGEN PRINCIPAL -->
                        <img src="/imgs/noticias/<?php echo $res["not_imagen"]; ?>"  
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
                             data-endelementdelay="0.1" data-endspeed="600">
                            <h3 class="c-main-title c-font-50 c-font-bold 
                                       c-font-center c-font-uppercase 
                                       c-font-white c-block" 
                                       style="text-shadow: 1px 1px 4px #000000;"> 
                             <?php echo $string1."<br>".$string2; ?>
                            </h3>
                        </div>        
                    </li>
                </ul>                    
            </div>
        </div>
    </section>

    <div class="container">
        <div class="col-md-12">
            <div class="cbp-l-project-desc-title"><span><?php echo $res["not_titulo"]; ?></span></div>
            <?php echo $res["not_noticia"]; ?>
        </div>
    </div>           
<!--FIN-->
                        
<?php include('footer.php'); ?>