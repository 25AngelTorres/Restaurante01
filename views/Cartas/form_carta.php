<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');
      include ('../layouts/header.php');

      include ('../../libs/adodb5/adodb-pager.inc.php');
	  include ('../../libs/adodb5/adodb.inc.php');
	  include ('../../models/Conexion.php');
	  include ('../../models/Modelo.php');
	  include ('../../models/Cartas.php');					//Archivo independiente a cada tabla
	  include ('../../controllers/CartasController.php');
	  include ('../../libs/Er.php');

	$CartasC = new CartasController();

	  if(isset($_POST['descripcion_cartas']) && isset($_POST['tipo_cartas'])){
	  	/*echo "<pre>";
	  		print_r($_POST);
	  	echo "</pre>";
	  	die();*/

	  	$CartasC -> inserta_cartas($_POST);
	  }
?>

<header class="header_home">
<section class="header_home" >
	<header>
        <div class="container" >
            <div class="row ">
                <div class="intro-heading"><h1>Insertar un nuevo tipo Menú a la Carta</h1></div>
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
                    <h3 class="section-subheading text-muted">Ingresa otro Men&uacute; a la Carta.</h3>

                </div>
            </div>
		<form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-12 text-center">
					<hr>
                  	<div class="form-group">
	                    <label for="tipo">Tipo de Men&uacute;</label>
	                    <input type="text" class="form-control" id="tipo" placeholder="Tipo de Menú" name="tipo_cartas" >
                  	</div>
                  	<hr>
                  	<div class="form-group">
	                    <label for="descripcion">Descripci&oacute;n</label>
	                    <textarea name="descripcion_cartas" id="descripcion" class="form-control"></textarea>
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
                        <a href="<?php echo BASEURL ?>/views/Mesas/form_mesas.php">
                            <h4 class="post-title">
                                Insertar una nueva mesa
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