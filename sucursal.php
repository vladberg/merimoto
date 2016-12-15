<?php
session_start();
include_once ("lib/template.php"); 
$link=conectarse();

if(isset($_SESSION['servicios_user'])){
$usuario=$_SESSION['servicios_user'];
$log='<a href="#" onclick="document.frmlogout.submit();" style="color:#FE0000"><i class="fa fa-power-off"></i> Cerrar Sesión</a>';
}
else{
$usuario='<a href="user.login.php" style="color:#69AE1D">
        				<i class="fa fa-user"> INICIAR SESION </i>
					</a>';
$log='<a href="registro.php" style="color:#69AE1D">
    					<i class="fa fa-user"> REGISTRO </i>
					</a>';
}
?>
<!DOCTYPE html>
<html equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Merimoto</title>
	
	<meta charset="utf-8">


	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/superfish.css" type="text/css">
	<link rel="stylesheet" href="css/template.css" type="text/css">
	<link rel="stylesheet" href="css/custom.css" type="text/css">
	<link href="css/style5.css" rel="stylesheet" type="text/css" />
	<!-- UNCOMMENT BELOW IF YOU WANT RESPONSIVE LAYOUT FOR TABLET with device width -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="css/responsive-tablet.css" type="text/css" />-->
	
	<!-- Delete only if you're planning to use responsive for table with meta viewport device-width=1  -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	
	
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->

	<script src="js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	<script src="js/jquery.noconflict.js" type="text/javascript"></script>
	<script src="js/modernizr.min.js" type="text/javascript"></script>
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <style type="text/css">
.iosSlider {
    width: 100%;
    background: url(loader_dark.gif) no-repeat center center;
    height: 370px !important; }
    #ber { 
  font: 100% sans-serif !important; 
}
#contenidos {
    height: 460px;
    overflow: auto;
    font-family: sans-serif;
    font-weight: normal;
    font-size: 15px;
    color: #000;
    position: absolute;
    top: 175px;
    right: 120px;
    width: 535px;
    background: rgba(255, 255, 255, 0.7);
    text-align: justify;
}


    </style>
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	


</head>

<body class="">


	<div id="page_wrapper">
		
		<link href="./index_files/css(2)" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/site2.css" type="text/css">
<style>
.t-title.light {
    color: #FFFFFF;
    font-size: 28px;
    margin: 15px 0 0;
    FONT-WEIGHT: 200;
    TEXT-ALIGN: CENTER;
}
.content-about-us {
    background-color: #ED1C24;
    color: #FFFFFF;
    padding-bottom: 10px;
}
</style>
<header id="header" class="style2">
	<div class="top-header">
		<div class="container">
			<!--<ul>
				<li>
    				<?php echo $usuario;?>
				</li>
				<li>
					|
				</li>
				<li>
					<?php echo $log;?>
				</li>
			</ul>-->
		</div>
	</div>
	<div class="mid-header">
		<div class="container">
			<div class="row-fluid">
				<div class="span3">
					<h1 class="main-logo">
						<a href="index.php">
							<img src="img/logo_merimoto.png" alt="Merimoto">
							
						</a>
					</h1>
				</div>
				<div class="span9">
					<ul class="top-menu">
                    <li class="with-margin"><a href="somos.php"><h2>Quienes somos</h2></a></li>
                    <li class="with-margin"> | </li>
						<li class="with-margin"><a href="sucursal.php"><h2>Sucursales</h2></a></li>
						<li class="with-margin"> | </li>
						<!--<li>
							<div class="search-content">
								<form action="busqueda.php" method="post">
									<input name="buscar" maxlength="50" type="text" size="20" placeholder="¿Qué estás buscando?" >
									<button type="submit" title="Buscar">
										<img src="img/lupa-busqueda.png" alt="Buscar">
									</button>
								</form>
							</div>
						</li>-->
						<li class="with-margin">
							<a href="contacto.php">
								<ul class="inline">
									<li>
										<img src="img/ico-contacto.png" alt="Contacto">
									</li>
									<li>
										Contáctanos
										<small>Estamos para ayudarte</small>
									</li>
								</ul>
								
								
							</a>
						</li>
						
						
						
					</ul>
				</div>
			</div>
			</div>
</header>	
			
	<div class="header">
   <div class="container">
         <div id="main" class="row">
           <div class="onecol"></div>
           <div id="slider" class="tencol">
           
           
           
           
             <div class="flex-container">
 
             
               <div class="flexslider">             
             
               
                 <!-- <ul class="slides">-->
    <!-- Contenido 1--->
  <!--  <li>-->
    <!-- Contenido texto--->
              <div id="contenidos">
<table width="430" cellspacing="16" align="center"><tr><td>
<!--Matriz-->
<table cellspacing="5">
<tr><td>
<span class="tit_sucursales">MATRIZ - MERIMOTO ITZÁES</span><br />
Calle 86 Av. Itzáes No. 473-F con 47 Col. Inalámbrica Mérida, Yucatán<br />
Teléfono: (999) 925-3484</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table>    
<div style="height:10px"></div>
      
<!--Centro-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">CENTRO</span><br />
Calle 59 por 52 y 54, Centro, 97000 Mérida, Yucatán<br />
Teléfono: (999) 928-0053</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table>    
<div style="height:10px"></div>   

<!--Norte-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">NORTE</span><br />
Calle 21 por 60 y 38, Centro, 97000 Mérida, Yucatán<br />
Teléfono: (999) 948-0149 </td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table>    
<div style="height:10px"></div>

<!--Sur-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">SUR</span><br />
Calle 46 Sur s/n x 107 y 109 Colonia Santa Rosa, 97279 Mérida, Yucatán<br />
Teléfono: (999) 932-0233</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table>    
<div style="height:10px"></div>

<!--Motul-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">MOTUL</span><br />
Calle 27 por 24 y 26 Col. Centro a 80 mts del parque principal<br />
Teléfono: (991) 915-1863</td>
<td valign="middle"><a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3" target="_blank"><img src="img/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a></td></tr> </table>    
<div style="height:10px"></div>

<!--Valladolid-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">VALLADOLID</span><br />
Calle 41 No. 179 por 32 y 34, Valladolid, Yucatán<br />
Teléfono: (985) 856-2257</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table> 
<div style="height:10px"></div>

<!--Ticul-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">TICUL</span><br />
Calle 25-A No. 198 	Centro, Ticul, Yucatán<br />
Teléfono: (997) 972-1787</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table> 
<div style="height:10px"></div>

<!--Isla Mujeres-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">ISLA MUJERES</span><br />
Sm3 Mza 86 Loc 1. Puerto Abrigo. Isla Mujeres, Quintana Roo<br />
Teléfono: (998) 877-1296</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table> 
<div style="height:10px"></div>

<!--Cozumel-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">COZUMEL</span><br />
Boulevard. Antonio Gonzalez Nº 498 Esq. 25. Centro Cozumel, <br>Quintana Roo<br />
Teléfono: (987) 872-7690</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table> 
<div style="height:10px"></div>

<!--Cancun-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">CANCÚN</span><br />
Sm. 64 Mz. 19 Lt. 3 Depto. A B y C por Av. Lopez Portillo y 13 Ote.<br />
Teléfono: (998) 884-8898</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table> 
<div style="height:10px"></div>

<!--Playa del carmen-->
<table cellspacing="6">
<tr><td>
<span class="tit_sucursales">PLAYA DEL CARMEN</span><br />
Av. 30 Norte Mz. 47 Lt. 3 entre Calle 2 Bis y 4 Norte Col. Centro<br />
Teléfono: (984)803-3923</td>
<td valign="middle"><!--<a class="linkopacity" href="https://www.facebook.com/media/set/?set=a.539170212796255.1073741826.299810753398870&type=3"><img src="images/merimoto_facebook.png" width="28" height="28" alt="Facebook Merimoto Sucursal Motul" title="Síguenos en Facebook Merimoto Sucursal Motul"/></a>--></td></tr> </table> 
<div style="height:10px"></div>
    
 </td></tr></table>
</div>
<!--Termina Contenido texto--->

<img src="img/sucursales.jpg" />
               <!--</li> -->
               <!--Termina contenido 1-->
              <!-- </ul>-->
               </div>
             </div>
           </div>
         </div>
         <!--Contenedor del flexslider-->
</div>
  
  </div><!-- Espacio para poner algún contenido-->
  <!--<div class="content"></div>-->
   <!--Termina Espacio para poner algún contenido-->

		
		<div class="content-about-us">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<h1 class="t-title light text-left">Matriz Mérida</h1>
						
						
						<p style="text-align: center">
							<span class="textos">Calle 86 Av. Itzáes No. 473-F con 47 Col. Inalámbrica Mérida, Yucatán&nbsp;&nbsp;Teléfono: (999) 925-3484,           <!--E-mail: <a href="#" class="link">info@merimoto.com.mx</a>--> </span><br />
       
       <a href="politicas_privacidad.php" class="link_ad2"><span style="color:#FFF">Aviso de Privacidad</span></a> &nbsp;&nbsp;<span style="color:#FFF">|</span> &nbsp;&nbsp;<a href="condiciones_uso.php" class="link_ad2"><span style="color:#FFF">Condiciones de Uso</span></a>
						</p>
								</div>
				</div>
			</div>
		</div>
<?php
footer();
?>