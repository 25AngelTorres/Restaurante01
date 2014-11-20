<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
      include ('../layouts/header.php');

      include ('../../libs/adodb5/adodb-pager.inc.php');
	  include ('../../libs/adodb5/adodb.inc.php');
	  include ('../../models/Conexion.php');
	  include ('../../models/Modelo.php');
	  include ('../../models/Mesas.php');					//Archivo independiente a cada tabla
	  include ('../../controllers/MesasController.php');
	  include ('../../libs/Er.php');

	$MesasC = new MesasController();

	  if(isset($_POST['nombre_mesas']) && isset($_POST['precio'])){
	  	/*echo "<pre>";
	  		print_r($_POST);
	  	echo "</pre>";
	  	die();*/

	  	$MesasC -> inserta_mesa($_POST);
	  }
?>

<header class="header_home">
<section class="header_home" >
	<header>
        <div class="container" >
            <div class="row ">
                <div class="intro-heading"><h1>Insertar un nuevo tipo Mesa</h1></div>
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
	                    <label for="nombre">Nombre de Mesa</label>
	                    <input type="text" class="form-control" id="nombre" placeholder="Nombre de la mesa" name="nombre_mesas" >
                  	</div>
                  	<hr>
                  	<div class="form-group">
	                    <label for="precio">Precio de reservaci&oacute;n</label>
	                    <input type= "number" class="form-control" id="precio" placeholder="Precio de reservacion por lugar" name="precio" >
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
                        <a href="<?php echo BASEURL ?>/views/Platillos/form_platillos.php">
                            <h4 class="post-title">
                                Agregar un nuevo platillo
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