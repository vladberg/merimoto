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
$nombre = $_POST['nombre'];
$asunto = 'Cotizacion';
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$text = $_POST['mensaje'];
$imagen=$_POST['action'];
$asunto = $_POST['asunto'];
$mensaje = '<h2>'.$nombre.'</h2><h3>'.$email.'</h3><h3>'.$telefono.'</h3><h3>'.$text.'</h3>';
$archivo = $imagen;
 
//$para = 'bergman.pereira.novelo@gmail.com';
$para = 'addy_honda@hotmail.com';
//Librerías para el envío de mail
include_once('lib/PHPMailer/class.phpmailer.php');
include_once('lib/PHPMailer/class.smtp.php');
 
//Este bloque es importante
$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPAuth = true;
$mail->SMTPSecure = "tsl";
$mail->Host = "localhost";
$mail->Port = 25;
 
//Nuestra cuenta
//$mail->Username ='bergman.pereira.novelo@gmail.com';
//$mail->Password = 'vladberg01'; //Su password
 
//Agregar destinatario
$mail->SetFrom("noreply@merimoto.com.mx", "Merimoto Cotizaciones");
$mail->AddAddress($para);
$mail->Subject = $asunto;
$mail->Body = $mensaje;
//Para adjuntar archivo
$mail->AddAttachment($archivo, $archivo);
$mail->MsgHTML($mensaje);
  
//Avisar si fue enviado o no y dirigir al index
if($mail->Send())
{
    echo'<script type="text/javascript">
            alert("Enviado Correctamente");            
         </script>';
}
else{
    echo'<script type="text/javascript">
            alert("NO ENVIADO, intentar de nuevo");
         </script>';
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
<html equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Merimoto</title>
	
	<meta charset="utf-8">

<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="js/bootstrap2.css" type="text/css">
	
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
.btn-template-main:hover, .btn-template-main:focus, .btn-template-main:active, .btn-template-main.active {
    background: #ED1C24;
    color: #ffffff;
    border-color: #ED1C24;
}
.btn-template-main {
    color: #ED1C24;
    background-color: #ffffff;
    border-color: #ED1C24;
}
.btn-primary {
    background-color: #EE1D25;
    background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
    background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
    background-image: -webkit-linear-gradient(top, #EE1D25, #EE1D25);
    background-image: -o-linear-gradient(top, #0088cc, #0044cc);
    background-image: linear-gradient(top, #0088cc, #0044cc);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
    border-color: #0044cc #0044cc #002a80;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.product-gallery .big_image {
    width: 100%;
    text-align: center;
    height: auto;
}
.modal.fade.in {
    top: 40%;
}
.modal {

    max-height: 654px;
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
										
										<a data-toggle="modal" href="#example"  class="btn btn-template-main btn-large">Cotizar</a>
										<div id="example" class="modal hide fade in" style="display: none;">
   
											 <div class="modal-header">
        <a data-dismiss="modal" class="close">×</a>
        <h3>Cotizar <?php echo $nombre;?></h3>
     </div>
     <div class="modal-body">
     <form action="" method="post">
     <input type="hidden" value="articulos/<?php echo $imagen;?>" name="action" />
         <div class="modal-body">
        <table style="text-align: center">
        <tr>
                                        	<td></td><td><img  width="350px" height="250px" src="articulos/<?php echo $imagen;?>" alt="<?php echo $nombre;?>">   </td>
                                        </tr>
        <tr>
        
        <td></td><td><input type="text" class="form-control" id="firstname" name="nombre" placeholder="Nombre" style="width: 500px !important"  required="required"></td>
        </tr>
        <tr>
        
                                            <td></td><td><input name="email" type="text" class="form-control" style="width: 500px !important" placeholder="Email" id="email" required="required"></td>
                                        </tr>
                                        <tr>
                                            <td></td><td><input type="text" name="telefono" class="form-control" style="width: 500px !important"  placeholder="Telefono" id="subject" required="required"></td>
                                        </tr>
                                        <tr>
                                            <td></td><td ><textarea id="message" class="form-control" name="mensaje" style="width: 500px !important"  placeholder="Mensaje" required="required"></textarea></td>
                                        </tr>
                                        
                                        <tr  style="margin-left: 150px;">
                                        <td></td>
                                         <td><button type="submit" class="btn btn-template-main"><i class="fa fa-envelope-o"></i> Enviar mensaje</button></td>
                                        </tr>

                                        </table>          
    </div>   
     
    </div>
    </form>
</div>		<script src="js/jquery1.js"></script>
		<script src="js/bootstrap-modal.js"></script>								
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