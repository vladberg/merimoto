<?php
error_reporting(0);
include_once("lib/template.php");
include_once 'lib/login.action.php';
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

$link=conectarse();
$id=$_GET['id'];
$query="select * from categorias where id_categoria=$id;";
$resultado=mysql_query($query, $link);
while($row=mysql_fetch_array($resultado)){ 

$categorias=$row['categoria'];
}
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Merimotos</title>
	
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/template.css" type="text/css">
	
	<!-- UNCOMMENT BELOW IF YOU WANT RESPONSIVE LAYOUT FOR TABLET with device width -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="css/responsive-tablet.css" type="text/css" />-->
	
	<!-- Delete only if you're planning to use responsive for table with meta viewport device-width=1  -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->

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
	


</head>

<body class="">


	<div id="page_wrapper">
		
		
<link rel="stylesheet" href="css/site2.css" type="text/css">

<header id="header" class="style2">
	<div class="top-header">
		<div class="container">
			
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
							$id=$_GET['id'];
							$hora=$_GET['h'];
							$fecha=$_GET['f'];
			$query1="select * from categorias where id_categoria=$id;";
			$resultado1=mysql_query($query1, $link);
			while($row1=mysql_fetch_array($resultado1)){ 
      $categorias=$row1['categoria'];
      
			?>			
					<div id="boligrafos-plastico" class="span12"><h2 style="border-bottom: 1px solid #111111;"><a href="index.php">CATEGORIAS</a> <spam style="color: #FE0000"> > </spam><?php echo html_entity_decode($categorias,ENT_QUOTES);?></h2><div style="color: #999;"></p></div></div>
					
					<div id="boligrafos-plastico" class="span12"><div style="color: #999;text-aling:rigth;">
					<form name="form" method="post" action="">
                    Ordenar por: <select name="ordenar" onchange="this.form.submit()">
    	<option value="0">-- Seleccionar --</option>
        <option value="1">Nombre del producto</option>
		<option value="2">Menor a Mayor Precio</option>
		<option value="3">Mayor a Menor Precio</option>
		<option value="4">Mas nuevo</option>
		<option value="5">Codigo de producto</option>
	</select>
					</form></div> 

					<?php
					} 
					$id=$_GET['id'];
					$hora=$_GET['h'];
					$fecha=$_GET['f'];
					$us=$_GET['us'];
					$ordenar=$_POST['ordenar'];
					$mayor=$_POST['mayor'];
					$query="select * from articulos where estatus=1 and categoria=$id order by ROUND(precio_venta,2) asc;";
					if($ordenar == '1'){
						$query="select * from articulos where estatus=1 and categoria=$id order by nombre asc;";
					}
					if ($ordenar == '2') {
						 $query="select * from articulos where estatus=1 and categoria=$id order by ROUND(precio_venta,2) asc;";
					}
                        if ($ordenar == '3') {
						 $query="select * from articulos where estatus=1 and categoria=$id order by ROUND(precio_venta,2) desc;";
					}
                    if ($ordenar == '4') {
    					 $query="select * from articulos where estatus=1 and categoria=$id order by fecha_creacion desc;";
					}
                    if ($ordenar == '5') {
    					 $query="select * from articulos where estatus=1 and categoria=$id order by codigo asc;";
					}
			
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $id_articulo=$row['id_articulo'];
      $codigo=html_entity_decode($row['codigo'], ENT_QUOTES);
      $categoria=$row['categoria'];
      $nombre=html_entity_decode($row['nombre'],ENT_QUOTES);
      $imagen=$row['imagen'];
      $precio_publicado=$row['precio_publicado'];
      $precio=$row['precio_venta'];
      $precio_venta=round($precio,2);
      $ppp=$row['id_proveedor'];


			?>							<div class="span3">
									<div class="product-list-item" id="bol-01-16-jeringa" style="height: 397px;">
										<span class="hover"></span>
										<div class="image">
											<span class="hidden">5</span><a href="detalle.php?id=<?php echo $id_articulo;?>&h=<?php echo $hora;?>&f=<?php echo $fecha;?>&us=<?php echo $us;?>" data-id="5">
												<img src="articulos/<?php echo $imagen; ?>" alt="">
											</a>
										</div>
										<div class="details fixclear">
											<h3 style="height:30px; text-align:left;">
											<a href="detalle.php?id=<?php echo $id_articulo;?>&h=<?php echo $hora;?>&f=<?php echo $fecha;?>&us=<?php echo $us;?>"><?php echo $nombre;?><br/><?php echo $codigo;?></a> 
											<?php
											$query2="select * from proveedores where estatus=1 and id_proveedor=$ppp;";
			                                $resultado2=mysql_query($query2, $link);
			                                while($row2=mysql_fetch_array($resultado2)){
			                                	$proveedor=$row2['codigo'];

			                                }
											?>
											<!--<br/><?php echo $proveedor?><br/>-->
                                                <?php if($precio_publicado==1 && $ver==1){
    											?>
                                                <spam style="color: #FE0000">$<?php echo $precio_venta;?></spam>
												
												<?php } ?>
											</h3><br/>
											<p class="desc"><?php echo $nombre;?>
											</p>
											<div class="actions">
												<!--<a href="http://impressline.com.mx/detalle.php?id_categoria=1&id=5">DETALLE PRODUCTO</a>-->
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
						
						
						<p style="text-align: center">
							Nos sentimos orgullosos de ser uno de los más importantes distribuidores de Honda en el sureste de México. Vemos "El Poder de los Sueños", filosofía Honda.
						</p>
					</div>
				</div>
			</div>
		</div>
<?php
footer();
?>