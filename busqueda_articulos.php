<?php
include_once("lib/template.php");
$link=conectarse();
cabezal();
$categoria=$_POST['categoria'];
			$query="select * from categorias where id_categoria=$categoria;";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $categorias=$row['categoria'];
  }

?>
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
					<div id="boligrafos-plastico" class="span12"><h2 style="border-bottom: 1px solid #111111;"><a href="index.php">CATEGORIAS </a> > ><a href="articulos.php?id=<?php echo $categoria;?>"><?php echo $categorias;?></a> > > Resultados de la Busqueda <?php echo $buscar;?></h2><div style="color: #999;">Un promocional útil e idóneo para cualquier campaña promocional.<p></p></div></div>	
					<?php
					 
					$busca=$_POST['buscar'];
					$categoria=$_POST['categoria'];
		$query="select * from articulos where (nombre like '%$busca%'or codigo like '%$busca%') and categoria = $categoria and estatus=1 order by ROUND(precio_venta,2) asc;";
			$resultado=mysql_query($query, $link);
			while($row=mysql_fetch_array($resultado)){ 
      $id_articulo=$row['id_articulo'];
      $codigo=html_entity_decode($row['codigo'], ENT_QUOTES);
      $categoria=$row['categoria'];
      $nombre=$row['nombre'];
      $imagen=$row['imagen'];

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
											<a href="detalle.php?id=<?php echo $id_articulo;?>"><?php echo $codigo;?> - <?php echo $nombre;?></a>
											</h3>
											<p class="desc"><?php echo $nombre;?><br><br></p>
											<div class="actions">
												<!--<a href="http://impressline.com.mx/registro">AGREGAR A COTIZACION</a>-->
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