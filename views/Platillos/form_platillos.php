<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
      include ('../layouts/header.php');

      include ('../../libs/adodb5/adodb-pager.inc.php');
	  include ('../../libs/adodb5/adodb.inc.php');
	  include ('../../models/Conexion.php');
	  include ('../../models/Modelo.php');
	  include ('../../models/Platillos.php');					//Archivo independiente a cada tabla
	  include ('../../controllers/PlatillosController.php');
	  include ('../../libs/Er.php');

	$PlatillosC = new PlatillosController();

	  if(isset($_POST['tipo_platillos']) && isset($_POST['nombre_platillos']) && isset($_POST['precio_platillos'])){
	  	/*echo "<pre>";
	  		print_r($_POST);
            print_r($_FILES);
	  	echo "</pre>";
	  	die();*/

	  	$PlatillosC -> inserta_platillos($_POST, $_FILES);
	  }
?>

<header class="header_home">
<section class="header_home" >
	<header>
        <div class="container" >
            <div class="row ">
                <div class="intro-heading"><h1>Insertar un nuevo tipo de platillo</h1></div>
                <a href="#form" class="page-scroll btn btn-xl" id="btn_orders">Continuar</a>
            </div>
        </div>
    </header>      
</section>
</header>

<section id="form">
	<div class="container">
		<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Insertar</h2>
                    <h3 class="section-subheading text-muted">Ingresa otro Mesa que quieres que este disponible para reservaci&oacute;n.</h3>

                </div>
            </div>
		<form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-12 text-center">
					<hr>
                    <div class="form-group">
                        <label for="tipo_platillos">Men&uacute;:</label>
                        <?php echo $PlatillosC -> getDropDown('Id_carta', 'Descripcion', 'cartas', 'tipo_platillos', 'tipo_platillos', '') ?>
                    </div>
                    <hr>
                  	<div class="form-group">
	                    <label for="nombre">Nombre del platillo</label>
	                    <input type="text" class="form-control" id="nombre" placeholder="Nombre del platillo" name="nombre_platillos" >
                  	</div>
                  	<hr>
                    <div class="form-group">
                        <label for="descripcion">Descripci&oacute;n</label>
                        <textarea name="descripcion_platillos" id="descripcion" class="form-control"></textarea>
                    </div>
                    <hr>
                  	<div class="form-group">
	                    <label for="precio">Precio del platillo</label>
	                    <input type= "number" class="form-control" id="precio" placeholder="Precio por platillo" name="precio_platillos" >
                  	</div>
                  	<hr>
                    <div class="form-group">
                        <label for="ImagenG">Imagen grande a visualizar del platillo: </label>
                        <input type="file" id="ImagenG" name="ImagenG" value="" placeholder="Imagen grande a visualizar del platillo" class="form-control">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="ImagenC">Imagen de dimensiones pequeñas a visualizar del platillo: </label>
                        <input type="file" id="ImagenC" name="ImagenC" value="" placeholder="Imagen pequeña a visualizar del platillo" class="form-control">
                    </div>
                    <hr>
			  	</div>
			  	<div class="row">
	    			<div class="col-md-12" align="center">
	    				<input type="submit" name="" value="Insertar" class="btn btn-xl">
	    			</div>
	    		</div>
			</form>
	 		
	 		<div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <hr>
                    <div class="post-preview">
                        <a href="<?php echo BASEURL ?>/views/Cartas/form_carta.php">
                            <h4 class="post-title">
                                Insertar un nuevo men&uacute; a la carta
                            </h4>
                        </a>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="<?php echo BASEURL ?>/views/Mesas/form_mesas.php">
                            <h4 class="post-title">
                                Agregar una nueva Mesa
                            </h4>
                        </a>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="<?php echo BASEURL ?>/views/Report/report.php">
                            <h4 class="post-title">
                                Crear Reporte
                            </h4>
                        </a>
                    </div>
                    <hr>
                </div>
            </div>
		
	</div>
</section>

<?php include ('../layouts/footer.php'); ?>