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
                        data-thumb="/static/img/slides/mi_gusi/mi-gusi-fondo.jpg"  
                        data-delay="4330"  
                        data-rotate="0"  
                        data-saveperformance="off"  
                        data-title="Unlock Power">
                        <!-- MAIN IMAGE -->
                        <img src="static/img/slides/mi_gusi/mi-gusi-fondo.jpg"  
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

    <!-- DIVISOR  ROJO DESPUES DEL SLIDE YOUTUBE-->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/mi_gusi/banner-youtube.jpg')">
        <a href="https://www.youtube.com/channel/UCJSdMDYgpYbIP79sgG1mZxA" target="_blank">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    SÍGUENOS EN YOUTUBE
                    </h3>
                    <i class="c-font-white c-center fa fa-youtube fa-3x" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        </a>
    </div>
	<!-- DIVISOR  ROJO DESPUES DEL SLIDE YOUTUBE-->
    <!-- RECETARIO NUGGETS -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow animate fadeInRight">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-padre-2022-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN DÍA DEL PADRE</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-padre-2022" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec9_nombre" id="rec9_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec9_email" id="rec9_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec9_estado" name="rec9_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec9_corte" id="rec9_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="reporte-enviar">DESCARGAR RECETARIO DÍA DEL PADRE</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-padre-2022").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec9_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec9_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec9_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec9_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec9_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-padre-2022-container").load("enviado-recetario-padre-2022.php", { 
										"rec_nombre": document.getElementById('rec9_nombre').value,
										"rec_email": document.getElementById('rec9_email').value,
										"rec_estado": document.getElementById('rec9_estado').value,
										"rec_corte": document.getElementById('rec9_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/banner-dia-del-padre.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <!-- RECETARIO NUGGETS -->
    <!-- RECETARIO SUPERBOWL -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-8 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/superbowl-banner.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-superbowl-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN SUPERBOWL</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-superbowl" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec8_nombre" id="rec8_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec8_email" id="rec8_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec8_estado" name="rec8_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec8_corte" id="rec8_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-padre-enviar">DESCARGAR RECETARIO SUPERBOWL</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-superbowl").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec8_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec8_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec8_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec8_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec8_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-superbowl-container").load("enviado-recetario-superbowl.php", { 
										"rec_nombre": document.getElementById('rec8_nombre').value,
										"rec_email": document.getElementById('rec8_email').value,
										"rec_estado": document.getElementById('rec8_estado').value,
										"rec_corte": document.getElementById('rec8_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO EDICIÓN PADRE -->

    <!-- RECETARIO NUGGETS -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow animate fadeInRight">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-nuggets-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI NUGGETS</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-nuggets" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec10_nombre" id="rec10_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec10_email" id="rec10_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec10_estado" name="rec10_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec10_corte" id="rec10_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="reporte-enviar">DESCARGAR RECETARIO NUGGETS</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-nuggets").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec10_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec10_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec10_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec10_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec10_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-nuggets-container").load("enviado-recetario-nuggets.php", { 
										"rec_nombre": document.getElementById('rec10_nombre').value,
										"rec_email": document.getElementById('rec10_email').value,
										"rec_estado": document.getElementById('rec10_estado').value,
										"rec_corte": document.getElementById('rec10_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/nuggets.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <!-- RECETARIO NUGGETS -->

    <!-- RECETARIO EDICIÓN PADRE -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-8 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/recetario-padre.png');"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-padre-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN DÍA DEL PADRE</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-padre" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec2_nombre" id="rec2_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec2_email" id="rec2_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec2_estado" name="rec2_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec2_corte" id="rec2_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-padre-enviar">DESCARGAR RECETARIO DÍA DEL PADRE</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-padre").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec2_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec2_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec2_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec2_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec2_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-padre-container").load("enviado-recetario-padre.php", { 
										"rec_nombre": document.getElementById('rec2_nombre').value,
										"rec_email": document.getElementById('rec2_email').value,
										"rec_estado": document.getElementById('rec2_estado').value,
										"rec_corte": document.getElementById('rec2_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO EDICIÓN PADRE -->

    <!-- TITULO RECETARIOS PARRILLA -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/mi_gusi/banner-youtube.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    RECETARIOS 14 DE FEBRERO
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- TITULO RECETARIOS PARRILLA -->

	<!-- RECETARIO EDICIÓN 14 FEBRERO -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-8 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/recetario-14-feb.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-14febrero-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN 14 DE FEBRERO</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-14febrero" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec2_nombre" id="rec2_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec2_email" id="rec2_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec2_estado" name="rec2_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec2_corte" id="rec2_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-14febrero-enviar">DESCARGAR RECETARIO 14 FEBRERO</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-14febrero").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec2_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec2_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec2_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec2_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec2_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-14febrero-container").load("enviado-recetario-14febrero.php", { 
										"rec_nombre": document.getElementById('rec2_nombre').value,
										"rec_email": document.getElementById('rec2_email').value,
										"rec_estado": document.getElementById('rec2_estado').value,
										"rec_corte": document.getElementById('rec2_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO EDICIÓN 14 FEBRERO -->

    <!-- TITULO RECETARIOS PARRILLA -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/mi_gusi/banner-youtube.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    RECETARIOS PARRILLA
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- TITULO RECETARIOS PARRILLA -->

    <!-- RECETARIO EDICION PARRILLERA -->
    <!-- IMAGEN A 3/4 SEGUNDA SECCION RECETA DEL MES-->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-8 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/img_recetario.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInRight">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN PARRILLERA</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec_nombre" id="rec_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec_email" id="rec_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec_estado" name="rec_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec_corte" id="rec_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="reporte-enviar">DESCARGAR RECETARIO</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-container").load("enviado-recetario.php", { 
										"rec_nombre": document.getElementById('rec_nombre').value,
										"rec_email": document.getElementById('rec_email').value,
										"rec_estado": document.getElementById('rec_estado').value,
										"rec_corte": document.getElementById('rec_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <!-- RECEtARIO EDICION PARRILLERA -->

    <!-- TITULO RECETARIOS COCINA -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/mi_gusi/banner-youtube.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    RECETARIOS COCINA
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- TITULO RECETARIOS COCINA -->

    <!-- RECETARIO EDICION PATRIO -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow animate fadeInRight">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-patrio-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN PATRIO</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-patrio" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec4_nombre" id="rec4_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec4_email" id="rec4_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec4_estado" name="rec4_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec4_corte" id="rec4_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="reporte-enviar">DESCARGAR RECETARIO PATRIO</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-patrio").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec4_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec4_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec4_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec4_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec4_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-patrio-container").load("enviado-recetario-patrio.php", { 
										"rec_nombre": document.getElementById('rec4_nombre').value,
										"rec_email": document.getElementById('rec4_email').value,
										"rec_estado": document.getElementById('rec4_estado').value,
										"rec_corte": document.getElementById('rec4_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/img_recetario_patrio.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <!-- RECETARIO EDICION PATRIO -->

    <!-- RECETARIO EDICIÓN COCINA -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-8 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/img_recetario_cocina.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-cocina-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN COCINA</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-cocina" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec3_nombre" id="rec3_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec3_email" id="rec3_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec3_estado" name="rec3_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec3_corte" id="rec3_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-cocina-enviar">DESCARGAR RECETARIO COCINA</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-cocina").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec3_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec3_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec3_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec3_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec3_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-cocina-container").load("enviado-recetario-cocina.php", { 
										"rec_nombre": document.getElementById('rec3_nombre').value,
										"rec_email": document.getElementById('rec3_email').value,
										"rec_estado": document.getElementById('rec3_estado').value,
										"rec_corte": document.getElementById('rec3_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO EDICIÓN COCINA -->

    <!-- TITULO RECETARIOS NAVIDEÑOS -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/mi_gusi/banner-youtube.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">
                    RECETARIOS NAVIDEÑOS
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- TITULO RECETARIOS NAVIDEÑOS -->

    <!-- RECETARIO NAVIDEÑO 3-->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow animate fadeInRight">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-navidad-3-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN NAVIDEÑA</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-navidad-3" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec7_nombre" id="rec7_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec7_email" id="rec7_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec7_estado" name="rec7_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec7_corte" id="rec7_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-navideno-enviar">DESCARGAR RECETARIO NAVIDEÑO</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-navidad-3").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec7_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec7_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec7_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec7_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec7_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-navidad-3-container").load("enviado-recetario-navidad-3.php", { 
										"rec_nombre": document.getElementById('rec7_nombre').value,
										"rec_email": document.getElementById('rec7_email').value,
										"rec_estado": document.getElementById('rec7_estado').value,
										"rec_corte": document.getElementById('rec7_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/Portada_Recetario.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO NAVIDEÑO 3 -->
    <!-- RECETARIO EDICIÓN NAVIDAD 2 -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-8 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/recetario_navidad_2.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 wow animate fadeInLeft">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-navidad-2-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN NAVIDEÑA</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-navidad-2" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec5_nombre" id="rec5_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec5_email" id="rec5_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec5_estado" name="rec5_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec5_corte" id="rec5_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-navideno-2-enviar">DESCARGAR RECETARIO NAVIDEÑO 2</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-navidad-2").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec5_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec5_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec5_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec5_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec5_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-navidad-2-container").load("enviado-recetario-navidad-2.php", { 
										"rec_nombre": document.getElementById('rec5_nombre').value,
										"rec_email": document.getElementById('rec5_email').value,
										"rec_estado": document.getElementById('rec5_estado').value,
										"rec_corte": document.getElementById('rec5_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO EDICIÓN NAVIDAD 2 -->

    <!-- RECETARIO NAVIDEÑO -->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-4 col-sm-6 wow animate fadeInRight">
                    <div class="c-wrapper c-bg-red" style="height: 550px;">
                        <div class="c-content c-border c-border-padding c-border-padding-right" id="forma-recetario-navidad-container">

                            <h3 class="c-title c-font-25 c-font-white c-font-uppercase c-font-bold">DESCARGA EL RECETARIO GUSI EDICIÓN NAVIDEÑA</h3>

                            <p class="c-description c-font-17 c-font-white">Llena el siguiente formulario para poder descargarlo:</p>

							<form id="forma-recetario-navidad" class="form-horizontal" method="post" action="descarga-recetario-gusi.php">
								
								<div class="form-group row">
									<input type="text" name="rec6_nombre" id="rec6_nombre" class="form-control my-2" placeholder="Nombre*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<input type="email" name="rec6_email" id="rec6_email" class="form-control my-2" placeholder="Email*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="form-group row">
									<select class="form-control" id="rec6_estado" name="rec6_estado" required="">
										<option value="">Elige por favor...</option>
										<option value="Aguascalientes">Aguascalientes</option>
										<option value="Baja California Norte">Baja California Norte</option>
										<option value="Baja California Sur">Baja California Sur</option>
										<option value="Campeche">Campeche</option>
										<option value="Chiapas">Chiapas</option>
										<option value="Chihuahua">Chihuahua</option>
										<option value="Ciudad de México">Ciudad de México</option>
										<option value="Coahuila">Coahuila</option>
										<option value="Colima">Colima</option>
										<option value="Durango">Durango</option>
										<option value="Estado de México">Estado de México</option>
										<option value="Guanajuato">Guanajuato</option>
										<option value="Guerrero">Guerrero</option>
										<option value="Hidalgo">Hidalgo</option>
										<option value="Jalisco">Jalisco</option>
										<option value="Michoacán">Michoacán</option>
										<option value="Morelos">Morelos</option>
										<option value="Nayarit">Nayarit</option>
										<option value="Nuevo León">Nuevo León</option>
										<option value="Oaxaca">Oaxaca</option>
										<option value="Puebla">Puebla</option>
										<option value="Querétaro">Querétaro</option>
										<option value="Quintana Roo">Quintana Roo</option>
										<option value="San Luis Potosí">San Luis Potosí</option>
										<option value="Sinaloa">Sinaloa</option>
										<option value="Sonora">Sonora</option>
										<option value="Tabasco">Tabasco</option>
										<option value="Tamaulipas">Tamaulipas</option>
										<option value="Tlaxcala">Tlaxcala</option>
										<option value="Veracruz">Veracruz</option>
										<option value="Yucatán">Yucatán</option>
										<option value="Zacatecas">Zacatecas</option>
									</select>
								</div>
								<div class="form-group row">
									<input type="text" name="rec6_corte" id="rec6_corte" class="form-control my-2" placeholder="Corte de res favorito*" maxlength="64" required style="margin: 5px 0;">
								</div>
								<div class="text-left py-2">
									<button type="submit" class="text-uppercase w-100 py-2 bg-gris-obs text-white border-0 btn btn-lg c-btn-white c-font-uppercase c-btn-square c-btn-border-1x" id="recetario-navideno-enviar">DESCARGAR RECETARIO NAVIDEÑO</button>
								</div>
		
							</form>

							<script type="text/javascript">
							$("#forma-recetario-navidad").submit(function(e){
							
								e.preventDefault();
							    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
							    var theMessage = "Por favor llena los siguientes campos: \n";
							    var noErrors = theMessage
								   
							    if (document.getElementById('rec6_nombre').value == "") { theMessage = theMessage + "\n --> Nombre"; }
							    if (document.getElementById('rec6_email').value == "") { theMessage = theMessage + "\n --> Email"; }
							    if (document.getElementById('rec6_estado').value == "") { theMessage = theMessage + "\n --> Estado"; }
							    if (document.getElementById('rec6_corte').value == "") { theMessage = theMessage + "\n --> Corte de res favorito"; }
								if (!emailPattern.test(document.getElementById('rec6_email').value)) { theMessage = theMessage + "\n --> Ingresa una dirección de email válida"; }
							
							    if (theMessage == noErrors)
							    { 
									$("#forma-recetario-navidad-container").load("enviado-recetario-navidad.php", { 
										"rec_nombre": document.getElementById('rec6_nombre').value,
										"rec_email": document.getElementById('rec6_email').value,
										"rec_estado": document.getElementById('rec6_estado').value,
										"rec_corte": document.getElementById('rec6_corte').value
									}, function() { });
							    }
							    else
							    {
							        alert(theMessage);
							        return false;
							    }
							
							});
							</script>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('imgs/img_recetario_navidad.png');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>     
    <!-- RECETARIO NAVIDEÑO -->
	
    
//<?php
//$sql  = " SELECT * ";
//$sql .= " FROM mi_gusi "; 
//$sql .= " JOIN recetas "; 
//$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
//$sql .= " WHERE mi_gusi.mg_mi_gusi = 1 ";
//$sql .= " AND mi_gusi.mg_posicion = 1 ";
//$sql .= " AND mi_gusi.mg_status = 1 ";
//$stmt = $cnx->prepare($sql);
//$stmt->execute();
//$rec1 = $stmt->fetch();
//?>





    <!-- DIVISOR EN GRIS RECETAS -->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/banner-recetas.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-center c-content-title-2">
                    <h3 class="c-font-uppercase c-font-white c-font-bold">RECETAS</h3>
                    <a href="recetas.php"><h5 class="c-font-uppercase btn btn-md c-btn-red">Ver más</h5></a>
                </div>
            </div>
        </div>
    </div>

<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_mi_gusi = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 2 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec2 = $stmt->fetch();
?>    
    <!-- RECETAS -->
    <div class="c-content-box c-overflow-hide c-bs-grid-reset-space">
        <div class="row">
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
<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_mi_gusi = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 3 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec3 = $stmt->fetch();
?>
                    </div>
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
$sql .= " WHERE mi_gusi.mg_mi_gusi = 1 ";
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
<?php
$sql  = " SELECT * ";
$sql .= " FROM mi_gusi "; 
$sql .= " JOIN recetas "; 
$sql .= " ON mi_gusi.rec_id = recetas.rec_id "; 
$sql .= " WHERE mi_gusi.mg_mi_gusi = 1 ";
$sql .= " AND mi_gusi.mg_posicion = 5 ";
$sql .= " AND mi_gusi.mg_status = 1 ";
$stmt = $cnx->prepare($sql);
$stmt->execute();
$rec5 = $stmt->fetch();
?>
            <div class="col-md-6 wow animate fadeInDown">
                <div class="c-content-product-5 c-content-overlay">
                    <div class="c-overlay-wrapper">
                        <div class="c-overlay-content">
                            <h3 class="c-title c-margin-tb-30 c-font-uppercase c-font-bold c-font-30 c-font-white c-padding-20">
                                <span class="c-font-thin">Receta</span>
                                <br/><?php echo $rec5["rec_nombre"]; ?></h3>
                            <a href="<?php echo liga_receta($rec5["rec_id"],$rec5["rec_url"]); ?>" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Ver receta</a>
                        </div>
                    </div>                        
                    <div class="c-bg-img-center" style="height:800px;background-image: url('/imgs/recetas/<?php echo $rec5["rec_imagen"]; ?>')"></div>
                </div>
            </div>    
        </div>
    </div>                               

    <!--DIVISOR GRIS COCINA-->
    <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url('static/img/inicio/banner-recetas.jpg')">
        <div class="container">
            <div class="c-content-counter-1 wow animate fadeInDown">
                <div class="c-content-title-2 c-center">
                    <h3 class="c-center c-font-uppercase c-font-white c-font-bold">TIPS DE COCINA</h3>
                    <a href="https://www.facebook.com/GrupoGusi/?fref=ts" target="_blank"><h5 class="c-font-uppercase btn btn-md c-btn-red">Ver más</h5></a>
                </div>
            </div>
        </div>
    </div>

    <!-- DIVISION EN DOS COCINA Y PARRILLA-->
    <div class="c-content-box c-overflow-hide c-bg-grey">
        <div class="c-content-product-3 c-bs-grid-reset-space">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow animate fadeInLeft">
                    <div class="c-content-overlay">
                        <div class="c-overlay-wrapper">
                            <div class="c-overlay-content">
                                <p class="c-font-white c-font-bold" style="margin-top:50%">
                               Las mejores recetas y tips para preparar <br> platillos en tu cocina.</p>
                                <a href="cocina.php" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-2x c-btn-square">Ver más</a>
                            </div>
                        </div>
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('static/img/mi_gusi/cocina-fondo.jpg');"></div>
                    </div>
                </div>
                 <div class="col-md-6 col-sm-6 wow animate fadeInRight">
                    <div class="c-content-overlay">
                        <div class="c-overlay-wrapper">
                            <div class="c-overlay-content">
                                <p class="c-font-white c-font-bold" style="margin-top:50%">
                               Las mejores recetas y tips para preparar <br> tus cortes en la parrilla.</p>
                                <a href="parrilla.php" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-2x c-btn-square">Ver más</a>
                            </div>
                        </div>
                        <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 550px; background-image: url('static/img/mi_gusi/parrilla-fondo.jpg');"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>            

    <!-- DIVISOR CORPORATIVO  -->
    <div class="c-content-box c-size-md">
        <div class="container">
            <div class="c-content-counter-1">
                <div class="c-content-title-2">                            
                    <h3 class="c-center c-font-uppercase c-font-bold">OTRAS SECCIONES</h3>
                </div>
            </div>
            <div id="container">
                <div class="col-md-4 col-sm-6 c-center wow animate fadeInDown">
                <a href="https://www.facebook.com/GrupoGusi/?fref=ts" target="_blank"><img src="static/img/mi_gusi/tips-y-consejos.jpg" style="width:100%; height:100%"></a>
                </div>
                <div class="col-md-4 col-sm-6 c-center wow animate fadeInUp">
                <a href="cedis.php"><img src="static/img/inicio/corporativo/cedis-y-puntos-de-venta.jpg" style="width:100%; height:100%"></a>
                </div>
                <div class="col-md-4 col-sm-6 c-center wow animate fadeInRight">
                <a href="productos.php"><img src="static/img/mi_gusi/nuestros-productos.jpg" style="width:100%; height:100%"></a>
                </div>                                    
            </div>                
        </div>
    </div>                
</div>

<?php include('footer.php'); ?>
