<?php
error_reporting(0);
include_once("lib/template.php");
$link=conectarse();
$id_categoria=$_GET['id'];
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

if($_POST){
//Recibir todos los parámetros del formulario

$imagen=$_POST['action'];
$para = 'bergman.pereira.novelo@gmail.com';
$asunto = 'Cotización';
$unidades = $_POST['unidades'];
$color = $_POST['color'];
$personalizado = $_POST['personalizado'];
$codigo_articulo = $_POST['codigo_articulo'];
$nombre_articulo = $_POST['nombre_articulo'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
$mensaje = "Solicitud de Cotización <br/>";
$mensaje.="<strong>Nombre: </strong>".$nombre."<br/>";
$mensaje.="<strong>Correo de Contacto: </strong>".$email."<br/>";
$mensaje.="<strong>Articulo </strong>".$nombre_articulo."<br/> <strong>Codigo </strong>".$codigo_articulo."<br/>";
$mensaje.="<strong>Cantidad: </strong>".$unidades." Unidades"."<br/>";
$mensaje.="<strong>color </strong>".$color."<br/>";
$mensaje.= "<strong>Tipo de Perzonalizado</strong> ".$personalizado."<br/>";
$mensaje.= "<strong>Comentario</strong> ".$comentario."</br>";

$archivo = $imagen;
 
//Librerías para el envío de mail
include_once('lib/PHPMailer/class.phpmailer.php');
include_once('lib/PHPMailer/class.smtp.php');
 

//Este bloque es importante
$correo = new PHPMailer();
 
$correo->IsSMTP();
 
$correo->SMTPAuth = true;
 
$correo->SMTPSecure = 'tls';
 
$correo->Host = "localhost";
 
$correo->Port = 25;

$correo->Charset = "UTF-8";
 
//$correo->Username   = "bergman.pereira.novelo@gmail.com";
 
//$correo->Password   = "vladberg01";
 
$correo->SetFrom("noreply@sartory.com.mx", "Sistema de Cotizaciones");
 
$correo->AddReplyTo("noreply@sartory.com.mx","Webmaster");
 
$correo->AddAddress("bergman.pereira.novelo@gmail.com", "Ventas Sartory");
 
$correo->Subject = "Cotización";
 
$correo->MsgHTML($mensaje);
 
$correo->AddAttachment($archivo,$archivo);
 
if($correo->Send()) {
  
  echo "Mensaje enviado con exito.";
}
 }
 $ids=$_GET['id'];
 $query="select a.nombre,a.categoria,c.id_categoria,c.categoria from articulos a,categorias c
 where a.estatus=1 and a.id_articulo=$ids and a.categoria = c.id_categoria";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $nombre_producto=html_entity_decode($row[0], ENT_QUOTES);
      $id_cate=$row[1];
      $idc=$row[2];
      $cat=$row[3];
  }


?>
<!DOCTYPE html>
<html equiv="Content-Type" content="text/html; charset=UTF-8">	<meta charset="utf-8">
    <title>Merimotos</title>
	
	
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/superfish.css" type="text/css">
	<link rel="stylesheet" href="css/template.css" type="text/css">
	<link rel="stylesheet" href="css/custom.css" type="text/css">
	
	<!-- UNCOMMENT BELOW IF YOU WANT RESPONSIVE LAYOUT FOR TABLET with device width -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<link rel="stylesheet" href="css/responsive-tablet.css" type="text/css" />-->
	
	<!-- Delete only if you're planning to use responsive for table with meta viewport device-width=1  -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	
	<link rel="stylesheet" href="css/css" type="text/css" media="screen" id="google_font">
	<link rel="stylesheet" href="css/css(1)" type="text/css" media="screen" id="google_font_body">
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->

	<script src="js/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	<script src="js/jquery.noconflict.js" type="text/javascript"></script>
	<script src="js/modernizr.min.js" type="text/javascript"></script>
	<link href="css/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/owl.theme.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
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
	<script type="text/javascript">
function agregar() {
	campo = '<tr><td><label>CANTIDAD: <span id="span_clave"><input type="number" min="00" max="9999" name="unidades[]" style="width: 45px !important" size="5"></label></span></label></td><td><label> COLOR: <span id="span_clave"><input type="text" name="color[]" width="10px" size="5"></span></label></td></tr>';
	$("#cantidades").append(campo);
}
</script>

	
	<link rel="stylesheet" href="css/style.css" type="text/css">
	


</head>

<body class="">


	<div id="page_wrapper">
		
		<link href="./index_files/css(2)" rel="stylesheet" type="text/css">
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
						<a href="http://www.sartory.mx">
							<img src="img/logo_merimoto.png" alt="Sartory">
							
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
										Cont&aacute;ctanos
										<small>Estamos para ayudarte</small>
									</li>
								</ul>
								
								
							</a>
						</li>
						
						
						
					</ul>
			</div>
			</div>
</header>	

<script type="text/javascript">
	
	function confirmar ( mensaje ) { 
return confirm( mensaje ); 
} 
</script>
<h3 style="border-bottom: 1px solid #111111;">
<a href="index.php">CATEGORIA</a><spam style="color: #FE0000"> > </spam><a href="articulos.php?id=<?php echo $id_cate;?>"><?php echo html_entity_decode($cat,ENT_QUOTES);?></a> <spam style="color: #FE0000"> > </spam> <?php echo $nombre_producto;?> </h3>

<section id="content" >

			<div class="container">

				<div id="mainbody">
					<div class="row-fluid" style="margin-bottom: 15px;">
						<!--<div class="span3">-->
						<div class="span2">
							<div id="sidebar" class="sidebar-left">
								<div class="widget">
									<h4 class="title">CATEGORIAS:</h4>
									<ul class="menu">
									<?php 
			$query="select id_categoria,categoria,imagen from categorias where estatus=1 order by categoria asc";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $id_categoria=$row[0];
      $nombre_categoria=html_entity_decode($row[1], ENT_QUOTES);
			?>
										
										<li><a href="articulos.php?id=<?php echo $id_categoria;?>"><?php echo $nombre_categoria;?></a></li>
										<?php }?>
										</ul>
								</div>
								
							</div>
						</div>
						<?php 
						$id=$_GET['id'];
						$hora=$_GET['h'];
			$query="select * from articulos where estatus=1 and id_articulo=$id;";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $id_articulo=$row['id_articulo'];
      $codigo=$row['codigo'];
      $categoria=$row['categoria'];
      $nombre=html_entity_decode($row['nombre'], ENT_QUOTES);
      $imagen=$row['imagen'];
      $precio=$row['precio_venta'];
      $precio_venta=round($precio,2);
      $visible=$row['precio_publicado'];
      $descripcion=html_entity_decode($row['descripcion'], ENT_QUOTES);
      $persona=$row['personalizado'];
      $ppp=$row['id_proveedor'];

			?>		
						<div class="span10">
							<div class="row-fluid product-page">
								<div class="span4">
									<div class="product-gallery">
										<div class="big_image">
											
																						<a href="articulos/<?php echo $imagen;?>" rel="prettyPhoto[pp_gal]">
												<img class="width300" src="articulos/<?php echo $imagen;?>" alt="<?php echo $nombre;?>">
											</a>
										</div>
																			
									</div>
								</div>
								
								<div class="span8">
									<div class="main-data">
										<div id="print_me">
										<h1 class="name" id="p_nombre"><?php echo $nombre;?></h1>
										<h5>
											<strong>Clave:</strong> <span id="span_clave"><?php echo $codigo;?></span>
											<?php
											$query="select * from proveedores where estatus=1 and id_proveedor=$ppp;";
			                                $resultado=mysql_query($query, $link);
			                                while($row=mysql_fetch_array($resultado)){
			                                	$proveedor=$row['codigo'];

			                                }
											?>
											<!--<br/><?php echo $proveedor?><br/>-->
																					</h5>
										<h2 class="small_desc">
										<?php if($descripcion ==''){
											echo $nombre;
																					
										}
										else{
											echo $descripcion;
										}
										?>
										</h2>

										<!--<p>
											// 
										</p>-->
										<?php if($visible ==1 && $ver == 1){ ?>
										<p class="price">
											<h5 style="color: #FE0000"><strong>$</strong> <span id="span_clave"><?php echo $precio_venta;?></span> </h5>
											
										</p> <?php }?>

											<?php
											if($hora!=''){?>
											<form  method="post" action="agrega_cotizacion3.php">
											<?php
										}else{ 
											?>

											<!--<form  method="post" action="agrega_cotizacion2.php">
											<?php }
											$id=$_GET['id'];
											$hora = $_GET['h'];
											$fecha = $_GET['f'];
											$us=$_GET['us'];
											?>

															<input type="hidden" value="articulos/<?php echo $imagen;?>" name="action" />
															<input type="hidden" value="<?php echo $id;?>" name="id_articulo" />
															<input type="hidden" value="<?php echo $nombre;?>" name="nombre_articulo" />
															<input type="hidden" value="<?php echo $codigo;?>" name="codigo_articulo" />
															<input type="hidden" value="<?php echo $hora;?>" name="hora" />
															<input type="hidden" value="<?php echo $fecha;?>" name="fecha" />
															<input type="hidden" value="<?php echo $us;?>" name="us">
													<h5 class="title-step">Personaliza tu Cotización</h5>
													<table>
										
										
										<tr>
										<td>
										
											<label>CANTIDAD: <span id="span_clave"><input type="number"  step="0.01" min="00" max="9999" name="unidades[]" style="width: 45px !important" size="5" >
											</span></label></td>
											<td>
											<label> COLOR: <span id="span_clave"><input type="text" name="color[]" width="10px" size="5"></span></label> 
											</td>
											<td><span><a href="#" onclick="agregar();"><img src="img/add_list_256.png" width="20px" height="20px" /> Agregar</a></span></td>
											</tr>
											<div id="cantidades"></div>



											<tr>
											<td>
												<label>PERSONALIZACIÓN: </label>
											</td>
											<td><select name="tipo" style="width: 220px">
											<option value="No aplica">---Seleccionar Personalizado---</option>
												<?php
                     echo $query2="select * from personalizacion where idpersonalizacion in(".$persona.");";
									$resultado2=mysql_query($query2, $link);
									if(mysql_num_rows($resultado2)>0){

								while($row2 = mysql_fetch_array($resultado2)){
												?>
												 <option  value=" <?php echo html_entity_decode($row2[1], ENT_QUOTES); ?>"><?php echo html_entity_decode($row2[1], ENT_QUOTES); ?>
												 </option>
											<?php } } ?></select></td>
											</tr>
											<tr>
											<tr><td>
											
											<label for="comment">COMENTARIOS:</label></td>
                                            
													<td><textarea name="comentario" class="span12" style="resize: none;"></textarea></td>
													</tr></table>
                                                    <h6>Artículo sujeto a disponibilidad.</h6>
                                                    <br/><br/>
													<small>Este artículo se agregará a la solicitud de cotización.</small><br/>
                                                    <button class="btn btn-flat" type="submit" onclick="return confirmar('Articulo agregado al cotizador')">Enviar a Cotización</button>
												</form>									
										</div><!-- PRINT_ME -->
										
										<div style="height: 25px;"></div>
																				<div class="row-fluid to_cart">
											<div class="quantitiy" style="margin-bottom:0px; padding-bottom:0px;">
																						</div>
											<div class="clear"></div>
											
											<div class="clear"></div>
											<div style="height: 5px;"></div>
											<div style="height: 5px;"></div>
										</div>
									</div>
								</div>
							</div>
							
							<div style="height: 25px;"></div>
							
							<div class="row-fluid" style="margin-bottom:5px;">
								
								<div class="span12">
									<div class="tabbable tabs_style4">
									<div class="tab-pane" id="shop-tab3" style="padding: 10px 15px 15px;">
												<hr>
												<!--<div class="fb-comments" data-href="http://www.impressline.com.mx/detalle.php?id_categoria=1&id=5" data-num-posts="5" data-width="875"></div>-->
											
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<?php }?>
					<hr class="bs-docs-separator">
				</div>
				<div class="row-fluid margin-bottom">
					
				</div>
			</div>
		</section>
<?php
footer();
?>