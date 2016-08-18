<?php
error_reporting(0);
include_once('lib/conexion.php');
session_start();
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

function cabezal(){?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Merimotos</title>
		<meta charset="utf-8">
	


<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">	
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/superfish.css" type="text/css">
	<link rel="stylesheet" href="css/template.css" type="text/css">
	<link rel="stylesheet" href="css/custom.css" type="text/css">
	
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/owl.theme.css" rel="stylesheet">
    <style type="text/css">
.iosSlider {
    width: 100%;
    background: url(loader_dark.gif) no-repeat center center;
    height: 370px !important; 

    .img-rounded2 {
  border-radius: 50px;
}
   .img-rounded3 {
  border-radius: 10px;
}
    </style>
	
	
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	


</head>

<body class="">


	<div id="page_wrapper">

<header id="header" class="style2">
	<div class="top-header">
		<div class="container">
			<ul>
				<li>
					<?php echo $usuario;?>
				</li>
				<li>
					|
				</li>
				<li>
					<?php echo $log;?>
				</li>
			</ul>
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
                    <li class="with-margin"><a href="registro.php"><h2>Quienes somos</h2></a></li>
                    <li class="with-margin"> | </li>
						<li class="with-margin"><a href="registro.php"><h2>Sucursales</h2></a></li>
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
<?php }

function slider(){
	?>
	<div id="slideshow" class="gradient">
			<div class="iosSlider hideControls" style="width: auto; height: 370px;">
				<div class="slider">
				<?php
	$link=conectarse();
						$query="select * from banners where estatus=1 order by fecha_creacion asc";
			$resultado=mysql_query($query, $link);
			if($resultado !=0){
			while($row=mysql_fetch_array($resultado)){ 
      $imagen=$row['imagen'];
      $nombre_categoria=$row[1];
      $archivo=$row[2];
	?>
		<!--<div class="xtra-space"></div>-->
		
				<div class="item" >
						<a href="*">
						<img src="./banners/<?php echo $imagen;?>" >
						</a>
						<div class="main-caption" id="pole-position">
							<div class="container paddingless">
								<div class="row-fluid">
									
								</div>
							</div>
						</div>
					</div>
					
	<?php }

}
?>
</div>
				<div class="prev" style="cursor: pointer;"></div>
				<div class="next" style="cursor: pointer;"></div>
				<div class="selectorsBlock bullets">
					<div class="selectors">
						<div class="item first" style="cursor: pointer;"></div>
						<div class="item" style="cursor: pointer;"></div>
						<div class="item selected" style="cursor: pointer;"></div>
					</div>
				</div>
			</div>
			<div class="scrollbarContainer"></div>
		</div>
		<!--fin slider -->
            <div class="content-about-us">
    		<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<h1 class="t-title light text-left"><?php echo $nombre_categoria;?></h1>						
						<p>
						
						</p>
					</div>
				</div>
			</div>
		</div>
<?php
}

function footer()
{
	?>
<footer class="footer">
	<div class="container">
		<div class="row-fluid">
			<div class="span7">
			<form name="frmlogout" id="frmlogout" action="user.login.php" method="post"><input type="hidden" name="status" id="status" value="loggedout" /></form>
				<div class="row-fluid">
					
					<div class="span5">
						<div class="social-buttons">
						
							<a href="https://www.facebook.com/Hondamotos-1626503444304594" target="_blank">
								<img src="img/social-fb.png" alt="Síguenos en Facebook">
							</a>
							
							
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span13">
						<div class="footer-copy">
							
							<span>
								Copyright © 2016. <strong>Merimoto</strong>. Contacto: (999) 925-3484. Derechos Reservados. Sitio desarrollado por <a href="admin/" target="_blank" title="Ir al inicio">
								<img src="img/SARTORYlogo3.png" alt="Sartory">
							</a>
							</span>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</footer>	</div>
	<a href="#" id="totop" class="off">TOP</a>

<script src="js/jquery.iosslider.min.js"></script>
<script src="js/jquery.iosslider.kalypso.js"></script>
<script type="text/javascript">
;(function($){
	$(document).ready(function() {

		$('.iosSlider').iosSlider({
			onSlideChange: slideChange,
            autoSlideTimer: 10000,
			autoSlide: true
		});
	
	}); // end doc ready
})(jQuery);
</script>


<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	
	<script type="text/javascript">
	function ppOpen(panel, width){
		jQuery.prettyPhoto.close();
		setTimeout(function() {
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: width, theme:'pp_kalypso'});
			jQuery.prettyPhoto.open(panel);
		}, 300);
	} // function to open different panel within the panel
	
	jQuery(document).ready(function($) {
		jQuery("a[data-rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({theme:'pp_kalypso',social_tools:false, deeplinking:false});
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_kalypso'});
		jQuery("a[data-rel^='prettyPhoto[login_panel]']").prettyPhoto({theme:'pp_kalypso', default_width:800, social_tools:false, deeplinking:false});
		
		jQuery(".prettyPhoto_transparent").click(function(e){
			e.preventDefault();
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: 980, theme:'pp_kalypso transparent', opacity: 0.95});
			jQuery.prettyPhoto.open($(this).attr('href'),'','');
		});
		
	});
	</script>


<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap Framework -->

<script type="text/javascript" src="js/superfish_menu.js"></script><!-- Superfish Menu -->


</body></html>
<?php 
}
?>