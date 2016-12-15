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
<html equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Merimoto</title>
	
	<meta charset="utf-8">

<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	
	<link rel="stylesheet" href="css/template.css" type="text/css">
	
	<!-- UNCOMMENT BELOW IF YOU WANT RESPONSIVE LAYOUT FOR TABLET with device width -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="css/responsive-tablet.css" type="text/css" />-->
	
	<!-- Delete only if you're planning to use responsive for table with meta viewport device-width=1  -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
<script src="js/jquery-1.8.2.min.js"></script>
    <style type="text/css">
.iosSlider {
    width: 100%;
    background: url(loader_dark.gif) no-repeat center center;
    height: 370px !important; }

    .img-rounded2 {
  border-radius: 50px;
}
   .img-rounded3 {
  border-radius: 10px;
}
.t-title.light {
    color: #FFFFFF;
    font-size: 28px;
    margin: 15px 0 0;
    FONT-WEIGHT: 200;
    TEXT-ALIGN: CENTER;
}
.content-about-us {
    background-color: #0B0146;
    color: #FFFFFF;
    padding-bottom: 10px;
}
    .product-list-item .details p.desc {
    font-size: 12px;
    font-style: italic;
    color: #939393;
    line-height: 1.3;
    padding-top: 30px !important;
}
.product-list-item .details p.desc {
    font-size: 12px;
    font-style: italic;
    color: #939393;
    line-height: 1.3;
    padding-top 30px !important;
}
h2 {
    margin: 8px 0;
    padding: 0px 0;
    font-size: 18px;
    font-weight: normal;
    line-height: 1.2em;
    color: #646364;
    text-transform: none;
    font-family: 'Fjalla One', sans-serif;
}

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
						<h1 class="t-title light text-left">HondaMotos</h1>
						<?
						$query="select id_mensaje,pie from mensaje";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
				$pie=$row[1];

				}?>
						<p style="text-align: center">
							<?php echo $pie;?>
						</p>
								</div>
				</div>
			</div>
		</div>
<?php
footer();
?>