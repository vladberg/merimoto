<?php
include_once("lib/template.php");
$link=conectarse();
session_start();
if(isset($_SESSION['servicios_user'])){
$usuario=$_SESSION['servicios_user'];
$log='<a href="#" onclick="document.frmlogout.submit();" style="color:#FE0000"><i class="fa fa-power-off"></i> Cerrar Sesión</a>';
$ver=1;
}
else{
$usuario='<a href="user.login.php" style="color:#69AE1D">
            			<i class="fa fa-user"> INICIAR SESION </i>
					</a>';
$log='<a href="registro.php" style="color:#69AE1D">
    					<i class="fa fa-user"> REGISTRO </i>
					</a>';
$ver=2;
}
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta charset="utf-8">
	
	<meta name="description" content="SARTORY es una empresa de diseño, marketing y comercialización que ofrece soluciones novedosas y estrategias comerciales para su producto o negocio. Esta alianza es el resultado estratégico de la fusión de 2 empresas con años de experiencia en el Sureste de México: IDEAS PUBLICIDAD y COMERCIALIZADORA FAUR.">
	<meta name="keywords" content="Sartory publicidad, agencia de publicidad, desarrollo de sitios web, uniformes, desarrollo de productos, diseño de productos, artículos promocionales, publicidad, imagen corporativa, diseño, marca, logo, impresión digital, artículos publicitarios, logotipo, promoción, artículos publicitarios para empresas, regalos promocionales, artículos de oficina, servicio de diseño, proyecto publicitario, diseño de sitio web, artículos promocionales Mérida, promocionales económicos, artículos publicitarios merida yucatan, productos merchandising, productos publicitarios, catálogo de productos, , diseño web, diseño htm, diseño en flash, diseño gráfico, logo design, cms, php, seo, e-commerce, impresión, alojamiento web, fotografía, tarjetas de presentación, lonas publicitarias, lonas publicitarias, rotulación vehicular,  trípticos, dípticos, volantes, flyers, folletos, publicidad en papel para tortillas, artículos promocionales personalizados, publicidad en medios, productos de control de público"/>

<meta name="category" content="Sartory"/>
<meta name="author" content="Sartory | http://www.sartory.mx"/>
<meta name="reply-to" content="ventas@sartory.mx"/>
<meta name="resource-type" content="document"/>
<META name="robots" content="INDEX,FOLLOW"/> 
<meta name="revisit-after" content="1 day"/>
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
	<style type="text/css"></style>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	<script src="js/jquery.noconflict.js" type="text/javascript"></script>
	<script src="js/modernizr.min.js" type="text/javascript"></script>
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <style type="text/css">
.iosSlider {
    width: 100%;
    background: url(loader_dark.gif) no-repeat center center;
    height: 370px !important; 

    </style>

	
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    .product-list-item .details p.desc {
    font-size: 12px;
    font-style: italic;
    color: #939393;
    line-height: 1.3;
    padding-top: 15px;
}
    </style>
	


</head>

<body class="">


	<div id="page_wrapper">
<link rel="stylesheet" href="css/site2.css" type="text/css">

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
					<li class="with-margin"><a href="cotizacion.php"><img src="img/cotiza.jpg" alt="Cotizaciónes"></a></li>
						<li>
							<div class="search-content">
								<form action="busqueda.php" method="post">
									<input name="buscar" maxlength="50" type="text" size="20" placeholder="¿Qué estás buscando?" >
									<button type="submit" title="Buscar">
										<img src="img/lupa-busqueda.png" alt="Buscar">
									</button>
								</form>
							</div>
						</li>
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
<div class="container">
<section id="content">
			<div class="container">
				<div id="mainbody">
					<div class="row">
						<div class="span12">
							<div class="row">
							<?php
							$buscar=$_POST['buscar'];
			?>			
					<div id="boligrafos-plastico" class="span12"><h2 style="border-bottom: 1px solid #111111;"><a href="index.php">CATEGORIAS </a> <spam style="color: #FE0000"> > </spam> <?php echo $buscar;?></h2><div style="color: #999;">Un promocional útil e idóneo para cualquier campaña promocional.<p></p></div></div>	
					<?php
					 
					$busca=$_POST['buscar'];
			$query="select * from articulos where  (codigo like '%$busca%' or nombre like '%$busca%') and estatus =1  order by ROUND(precio_venta,2) asc;";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $id_articulo=$row['id_articulo'];
      $codigo=html_entity_decode($row['codigo'], ENT_QUOTES);
      $categoria=$row['categoria'];
      $nombre=$row['nombre'];
      $imagen=$row['imagen'];
      $precio_publicado=$row['precio_publicado'];
      $precio=$row['precio_venta'];
      $precio_venta=round($precio,2);
      $ppp=$row['id_proveedor'];

			?>							<div class="span3">
									<div class="product-list-item" id="bol-01-16-jeringa" style="height: 397px;">
										<span class="hover"></span>
										<div class="image">
											<span class="hidden">5</span><a href="detalle.php?id=<?php echo $id_articulo;?>" data-id="5">
												<img src="articulos/<?php echo $imagen; ?>" alt="">
											</a>
										</div>
										<div class="details fixclear">
											<h3 style="height:30px; text-align:left;">
											<a href="detalle.php?id=<?php echo $id_articulo;?>"><?php echo $nombre;?><br/><?php echo $codigo;?></a>
										
    										 <?php if($precio_publicado==1 && $ver==1){
    											?>
                                                <spam style="color: #FE0000">$<?php echo $precio_venta;?></spam>
												
												<?php } ?>
											</h3><br/>
											<p class="desc"><?php echo $nombre;?></p>
                                            <div class="actions">
												<a href="detalle.php?id=<?php echo $id_articulo;?>">DETALLE PRODUCTO</a>
											</div>
											<div class="price">
												<span>&nbsp;</span>
												<!--<small>$199</small>-->
											</div>
										</div>
									</div>
								</div>
                    								<?php }
                    							

                    								?>
                    							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
				<div class="content-about-us">
			<div class="container">
				<div class="row-fluid">
					<div class="span12">
						<h1 class="t-title light text-left">Los mejores Productos Promocionales</h1>
						
						<p>
							Son artículos promocionales que Sartory ofrece en una gran variedad
							de estilos y funciones para cualquier campaña publicitaria. Además pueden funcionar como
							una herramienta de marketing con increíbles resultados. El regalar productos promocionales
							útiles, como los bolígrafos, con la marca de su empresa, negocio o información lo ayudará
							a promover su marca en el mercado.
						</p>					</div>
				</div>
			</div>
		</div>
<?php
footer();
?>