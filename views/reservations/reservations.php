
<?php 
	

  session_start();
  //VISTA PRIVADAinclude ('../../libs/security.php');
  include ('../layouts/header.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Mesas.php');					//Archivo independiente a cada tabla
  include ('../../models/Reservaciones.php');					//Archivo independiente a cada tabla
  include ('../../models/Cliente.php');					//Archivo independiente a cada tabla
  include ('../../models/Reservacion.php');					//Archivo independiente a cada tabla
  include ('../../controllers/ReservacionesController.php');
  include ('../../controllers/MesasController.php');
  include ('../../controllers/ClienteController.php');
  include ('../../controllers/ReservacionController.php');
  include ('../../libs/Er.php');
  
  
//Inicializar el controlador
$MesasC = new MesasController();
$ClienteC = new ClienteController();
$ReservacionC = new ReservacionController();
$ReservacionesC = new ReservacionesController();
 if(isset($_POST['nombre_cliente'])
    && isset($_POST['direccion_cliente'])
    && isset($_POST['cp_cliente'])
    && isset($_POST['ciudad_cliente'])
    && isset($_POST['colonia_cliente'])
    && isset($_POST['telefono_cliente'])
    && isset($_POST['email_cliente'])
    )  {
    
    echo "<pre>";
      print_r($array);
    echo "</pre>";
    die();

    $ClienteC -> inserta_cliente($_POST);

    if(isset($_POST['Fecha_reservaciones']) 
      && isset($_POST['nombre_mesas']) 
      && isset($_POST['No_asientos_reservaciones'])
      && isset($_POST['Hora_reservaciones'])

      ){

      $arreglo = array(
        'Hora_reservaciones' => $_POST['Hora_reservaciones'],
        'Fecha_reservaciones' => $_POST['Fecha_reservaciones'],
        'No_asientos_reservaciones' => $_POST['No_asientos_reservaciones'],
        'nombre_mesas' => $_POST['nombre_mesas'],
        'costo' => $_POST['costo_reservacion'],
        'cliente' => $ClienteC -> consulta_id(),

      );

      $ReservacionesC->inserta_reservaciones($arreglo);
      //$ReservacionC -> inserta_reservacion($arreglo);
    }

  }

  if(isset($_POST['Fecha_reservaciones']) 
      && isset($_POST['nombre_mesas']) 
      && isset($_POST['No_asientos_reservaciones'])
      && isset($_POST['Hora_reservaciones'])

      ){

      $arreglo = array(
        'Hora_reservaciones' => $_POST['Hora_reservaciones'],
        'Fecha_reservaciones' => $_POST['Fecha_reservaciones'],
        'No_asientos_reservaciones' => $_POST['No_asientos_reservaciones'],
        'nombre_mesas' => $_POST['nombre_mesas'],
        'costo' => $_POST['costo_reservacion'],
        'cliente' => $_SESSION['id_cte'],

      );

      $ReservacionesC->inserta_reservaciones($arreglo);
      //$ReservacionC -> inserta_reservacion($arreglo);
    }

?>

<script type="text/javascript">
	var precio_m = 0;
	var precio_t = 0;
	var precio_l= 1
  var id_mes=0;
    function updatevariable(data) { 
        precio_m=data;
        precio_t = precio_l*precio_m;
        //alert(precio_m);
        var inputM = document.getElementById("precioMesa");//.valueOf() = "$ "+precio_t+" mxn";
        inputM.placeholder = "$ "+precio_m+" mxn";
        inputM.value= precio_m ;
        var input = document.getElementById("precioTotal");//.valueOf() = "$ "+precio_t+" mxn";
        input.placeholder = "$ "+precio_t+" mxn";
        input.value= precio_t ;
    }
    function updateprecio(data){
    	precio_l = data;
        precio_t = precio_l*precio_m;
    	//alert(precio_t);
	    var input = document.getElementById("precioTotal");//.valueOf() = "$ "+precio_t+" mxn";
        input.placeholder = "$ "+precio_t+" mxn";
        input.value= precio_t ;
	}
	//window.onload = precioTotal;

</script>

<!-- Header -->
    <header class="header_reservations">
        <div class="container" >
            <div class="intro-text">
                <div class="intro-heading">Reserva tu lugar con nosotros!</div>
                <a href="#services" class="page-scroll btn btn-xl">Reservaci&oacute;n</a>
            </div>
        </div>
    </header>
   
<!-- About Section -->
    <section id="services">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Reservations</h2>
                    <h3 class="section-subheading text-muted">Reserva tu lugar preferido para esos momentos especiales.</h3>

                    <a href="#form_reservations" class="page-scroll btn btn-xl" id="btn_reservations">Continuar</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12 text-center">
        <?php echo $ReservacionesC -> errores(); ?>
                </div>
            </div>
    	</div>
    </section>

    <section id="form_reservations" class="bg-darkest-gray">
    	<div class="container bg-light-gray form_delta">
    		<form class="form-horizontal registerForm" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
	    		<div class="row">
	    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h2>Ingresa los datos requeridos</h2>
	    			</div>
	    		</div>

          <?php if(isset($_SESSION['user']))
            echo '
              <div class="row" id="session_No_Iniciada">
                    <div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <hr>
                    <label>Usuario: <h4>'.$_SESSION["nombre"].'</h4></label>
                    <hr>
                    <label>Email: <h4>'.$_SESSION["email"].'</h4></label>
                    <p><a href="'.BASEURL.'/views/site/logout.php">Cambiar de usuario</a></p>
                    </div>
                  </div>
                  ';
              else{
                echo '
                  <div class="row" id="session_No_Iniciada">
                    <div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
                      <h3>Llena los campos requeridos o <a href="../site/login.php">Inicia Session</a> Para realizar tu reservaci&oacute;n</h3>
                      <hr>
                      <div class="form-group">
                      <input type="text" name="nombre_cliente" value="" placeholder="Nombre" class="form-control">
                      </div>
                      <hr>
                      <div class="form-group">
                      <input type="text" name="direccion_cliente" value="" placeholder="Direccion" class="form-control">
                      </div>
                      <hr>
                      <div class="form-group">
                      <input type="text" name="cp_cliente" value="" placeholder="CP" class="form-control">
                      </div>
                      <hr>
                      <div class="form-group">
                      <input type="text" name="ciudad_cliente" value="" placeholder="Ciudad" class="form-control">
                      </div>
                      <hr>
                      <div class="form-group">
                      <input type="text" name="colonia_cliente" value="" placeholder="Colonia" class="form-control">
                      </div>
                      <hr>
                      <div class="form-group">
                      <input type="tel" name="telefono_cliente" value="" placeholder="Telefono" class="form-control">
                      </div>
                      <hr>
                      <div class="form-group">
                      <input type="email" name="email_cliente" value="" placeholder="Email" class="form-control">
                      </div>
                      <hr>
                    </div>
                  </div>
                ';
              }
           ?>

	    		<div class="row">
	    			<div class="col-lg-4 col-lg-offset-2 col-md-10 col-md-offset-1">
		    			<div class="form-group">
		    				<hr>
		    				<label>Mesa:</label>
		    				<div class="form-group"
                                              <!-- $id_tabla,	$nombre_columna,	$tabla,			$name,			$id,			$where = ' ' -->
                        	<?php echo $MesasC->getDropDown('Id_mesa',		'Nombre',				'mesas',	'nombre_mesas',	'nombre' ); ?>
                <label>Costo por lugar: $ <input id="precioMesa" type="text" readonly="readonly"
                class="form-control"  >
                </label>
                </div>
			    			<hr>
                <div class="form-group">
			    			<select class="form-control" onchange="updateprecio(this.value)" name="No_asientos_reservaciones">
			    					<option value="1">N&uacute;mero de lugares</option>
			    					<option value="1"> 1</option>
			    					<option value="2"> 2</option>
			    					<option value="3"> 3</option>
			    					<option value="4"> 4</option>
			    					<option value="5"> 5</option>
			    					<option value="6"> 6</option>
			    					<option value="6"> 6 (2)</option>
			    					<option value="6"> 6 (3)</option>
			    					<option value="6"> 6 (4)</option>
			    			</select>
                </div>
			    			<hr>
			    			<label>Total: $ <input id="precioTotal" type="text" readonly="readonly" class="form-control" name="costo_reservacion"> </label>
			    			<hr>
                <div class="form-group">
			    			<input type="date" name="Fecha_reservaciones" value="" placeholder="fecha" class="form-control">
                </div>
			    			<hr>
                <div class="form-group">
			    			<input type="time" name="Hora_reservaciones" value="" placeholder="hora" class="form-control">
                </div>
			    			<hr>
			    			
	         			</div>	    				
	    				
	    			</div>
	    			<div class="col-lg-4 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<img src="../img/reservations/mesas.png" alt="" width="100%" class="img-thumbnail">
	    			</div>
	    		</div>
          

           

	    		
	    		<div class="row">
	    			<div class="col-md-12" align="center">
	    				<input type="submit" name="" value="Reservar" class="btn btn-xl">
	    			</div>
	    		</div>
    		</form>
    	</div>
    </section>


    <section>
    	<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <hr>
                    <div class="post-preview">
                        <a href="<?php echo BASEURL ?>/views/orders/orders.php">
                            <h2 class="post-title">
                                El mejor sabor hasta donde tu estes
                            </h2>
                        </a>
                        <p class="post-meta">Conoce nuestro servicio de entrega a domicilio, has tu orden y disfruta del mejor sabor directo a la puerta de tu casa.</p>
                    </div>
                    <hr>
                </div>
            </div>
    

        </div>
    </section>
    

<?php include ('../layouts/footer.php'); ?>