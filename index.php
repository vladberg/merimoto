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

<link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png" style="padding-top: 10px" >
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png" style="padding-top: 10px">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png" style="padding-top: 10px">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png" style="padding-top: 10px">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" style="padding-top: 10px">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png" style="padding-top: 10px">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" style="padding-top: 10px">
<link rel="manifest" href="/manifest.json">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
    <link href="css/owl.theme.css" rel="stylesheet">
    <style type="text/css">
.iosSlider {
    width: 100%;
    background: url(loader_dark.gif) no-repeat center center;
    height: 370px !important; }
    #ber { 
  font: 100% sans-serif !important; 
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
						<li class="with-margin"><a href="sucursales.php"><h2>Sucursales</h2></a></li>
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
<?php slider(); ?>
	
			
	<div class="container">
			<div class="row-fluid" >
            
				<div class="span12">
					<div class="breadcrumb" style="text-aling:center">
						Escoge una categoría:
					</div>
				</div>
			</div>

			<div class="row-fluid">
			<?php 
			$hora=$_GET['h'];
			$fecha =$_GET['f'];
			$us=$_GET['us'];
			$query="select id_categoria,categoria,imagen from categorias where estatus=1 order by orden asc";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $id_categoria=$row[0];
      $nombre_categoria=$row[1];
      $archivo=$row[2];

			?>

	<div class="span70">
					<table class="s-square">
						<tbody><tr>
							<td>
								<a href="articulos.php?id=<?php echo $id_categoria;?>&h=<?php echo $hora;?>&f=<?php echo $fecha;?>&us=<?php echo $us;?>">
									<img src="categorias/<?php echo $archivo; ?>" alt="<?php echo $nombre_categoria; ?>">
								</a>
							</td>
						
							
					</tbody></table>

				</div>
				    <?php
        }
        ?>
								<div class="o-line strong"></div>
			</div>
			

				
			</div>
		</div>
		
		<div class="content-about-us">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<h1 class="t-title light text-left">HondaMotos</h1>
						
						
						<p style="text-align: center">
							Nos sentimos orgullosos de ser uno de los más importantes distribuidores de Honda en el sureste de México. Vemos "El Poder de los Sueños", filosofía Honda.
						</p>
								</div>
				</div>
			</div>
		</div>
		 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/jquery.anythingslider.js"></script>
    <script src="js/jquery.stellar.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/waypoints.js"></script>
	<script src="js/jquery.uniform.js"></script>
    <script src="js/color-switcher.js"></script>
    <script type="text/javascript">
	
		jQuery(function($){
			// parallaax
			$.stellar({
				horizontalScrolling: true,
				verticalOffset: 0
			});
			//$(".panel-collapse").collapse();

			
		   // AnythingSlider initialization
			$('#slider').anythingSlider({
        enablePlay          : true,      // if false, the play/stop button will still be visible, but not clickable.
        autoPlay            : true,      // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
        autoPlayLocked      : true,     // If true, user changing slides will not stop the slideshow
        startStopped        : false,     // If autoPlay is on, this can force it to start stopped
        pauseOnHover        : true,      // If true & the slideshow is active, the slideshow will pause on hover
        resumeOnVideoEnd    : true,      // If true & the slideshow is active & a youtube video is playing, the autoplay will pause until the video completes
        stopAtEnd           : false,     // If true & the slideshow is active, the slideshow will stop on the last page. This also stops the rewind effect when infiniteSlides is false.
        playRtl             : false,     // If true, the slideshow will move right-to-left
        startText           : "Start",   // Start button text
        stopText            : "Stop",    // Stop button text
        delay               : 3000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
        resumeDelay         : 4000,     // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
        animationTime       : 600,       // How long the slideshow transition takes (in milliseconds)
        easing              : "swing",   // Anything other than "linear" or "swing" requires the easing plugin
      });
			
			//date picker
			$("#datepicker").datepicker({
				inline: true
			});
			
			//form styling
			$("select").uniform();
			
			
			
		})(jQuery);

	</script>
<?php
footer();
?>