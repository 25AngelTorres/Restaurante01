
<?php 
  session_start();
  include ('../layouts/header.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Cliente.php');					//Archivo independiente a cada tabla
  include ('../../models/Platillos.php');					//Archivo independiente a cada tabla
  include ('../../models/Orden.php');					//Archivo independiente a cada tabla
  include ('../../models/Pedido.php');					//Archivo independiente a cada tabla
  include ('../../controllers/PlatillosController.php');
  include ('../../controllers/ClienteController.php');
  include ('../../controllers/OrdenController.php');
  include ('../../controllers/PedidoController.php');
  include ('../../libs/Er.php');
  
  
//Inicializar el controlador
$PlatillosC = new PlatillosController();
$ClienteC = new ClienteController();
$OrdenC=new OrdenController();
$PedidoC = new PedidoController();



if(isset($_POST['nombre_cliente'])
    && isset($_POST['cp_cliente'])
    && isset($_POST['ciudad_cliente'])
    && isset($_POST['colonia_cliente'])
    && isset($_POST['direccion_cliente'])
    && isset($_POST['telefono_cliente'])
    && isset($_POST['email_cliente'])
 ){

    /*echo "<pre>";
        print_r($_POST);
    echo "</pre>";
    die();*/

    $ClienteC -> inserta_cliente($_POST);

    if(isset($_POST['Costo1'])){
    	$array = array(
		    "platillo_pedido" => $_POST['Platillo_1'],
		    "raciones_pedido" => $_POST['Platillo1_raciones'],
		);

    	$PedidoC -> inserta_Pedido($array);

    	$array2 = array(
		    "pedido_orden" => $PedidoC -> ultimo_id(),
		    "saldo_orden" => $_POST['saldo_orden1'],
		    "cliente_orden" => $ClienteC -> consulta_id(),
		);

    	$OrdenC -> inserta_Orden($array2);
    }

    if(isset($_POST['Costo2'])){
        $array = array(
            "platillo_pedido" => $_POST['Platillo_2'],
            "raciones_pedido" => $_POST['Platillo2_raciones'],
        );

        $PedidoC -> inserta_Pedido($array);

        $array2 = array(
            "pedido_orden" => $PedidoC -> ultimo_id(),
            "saldo_orden" => $_POST['saldo_orden2'],
            "cliente_orden" => $ClienteC -> consulta_id(),
        );

        $OrdenC -> inserta_Orden($array2);
    }

    if(isset($_POST['Costo3'])){
        $array = array(
            "platillo_pedido" => $_POST['Platillo_3'],
            "raciones_pedido" => $_POST['Platillo3_raciones'],
        );

        $PedidoC -> inserta_Pedido($array);

        $array2 = array(
            "pedido_orden" => $PedidoC -> ultimo_id(),
            "saldo_orden" => $_POST['saldo_orden3'],
            "cliente_orden" => $ClienteC -> consulta_id(),
        );

        $OrdenC -> inserta_Orden($array2);
    }

    if(isset($_POST['Costo4'])){
        $array = array(
            "platillo_pedido" => $_POST['Platillo_4'],
            "raciones_pedido" => $_POST['Platillo4_raciones'],
        );

        $PedidoC -> inserta_Pedido($array);

        $array2 = array(
            "pedido_orden" => $PedidoC -> ultimo_id(),
            "saldo_orden" => $_POST['saldo_orden4'],
            "cliente_orden" => $ClienteC -> consulta_id(),
        );

        $OrdenC -> inserta_Orden($array2);
    }

    if(isset($_POST['Costo5'])){
        $array = array(
            "platillo_pedido" => $_POST['Platillo_5'],
            "raciones_pedido" => $_POST['Platillo5_raciones'],
        );

        $PedidoC -> inserta_Pedido($array);

        $array2 = array(
            "pedido_orden" => $PedidoC -> ultimo_id(),
            "saldo_orden" => $_POST['saldo_orden5'],
            "cliente_orden" => $ClienteC -> consulta_id(),
        );

        $OrdenC -> inserta_Orden($array2);
    }

  }

?>


<script type="text/javascript">
	var precio_p1 = 0;			//Precio de los platillos individuales
	var precio_p2 = 0;
	var precio_p3 = 0;
	var precio_p4 = 0;
	var precio_p5 = 0;

	var precio_t = 0;			//Precio total
	
	var precio_r1= 0;			//Precio Racion
	var precio_r2= 0;
	var precio_r3= 0;
	var precio_r4= 0;
	var precio_r5= 0;

	var st1=0;
	var st2=0;
	var st3=0;
	var st4=0;
	var st5=0;

    function updateUNO(data) { 
        precio_p1=data;
        //alert(precio_p1);
        
        var pc1 = document.getElementById("Platillo_1Costo");
        pc1.value=precio_p1;
        pc1.placeholder= "$" +precio_p1+" mxn";

        var pcst1= document.getElementById("Platillo_1Subtotal");
        st1=precio_r1*precio_p1;
        pcst1.value=st1;
        pcst1.placeholder=st1;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    function updateSTUNO(data){
    	precio_r1=data;

    	var pcst1= document.getElementById("Platillo_1Subtotal");
    	st1=precio_r1*precio_p1;
        pcst1.value=st1;
        pcst1.placeholder=st1;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
   
   	function updateDOS(data) { 
        precio_p2=data;
        //alert(precio_p1);
        
        var pc2 = document.getElementById("Platillo_2Costo");
        pc2.value=precio_p2;
        pc2.placeholder= "$" +precio_p2+" mxn";

        var pcst2= document.getElementById("Platillo_2Subtotal");
        st2=precio_r2*precio_p2;
        pcst2.value=st2;
        pcst2.placeholder=st2;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    function updateSTDOS(data){
    	precio_r2=data;

    	var pcst2= document.getElementById("Platillo_2Subtotal");
    	st2=precio_r2*precio_p2;
        pcst2.value=st2;
        pcst2.placeholder=st2;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }

    function updateTRES(data) { 
        precio_p3=data;
        
        var pc3 = document.getElementById("Platillo_3Costo");
        pc3.value=precio_p3;
        pc3.placeholder= "$" +precio_p3+" mxn";

        var pcst3= document.getElementById("Platillo_3Subtotal");
        st3=precio_r3*precio_p3;
        pcst3.value=st3;
        pcst3.placeholder=st3;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    function updateSTTRES(data){
    	precio_r3=data;

    	var pcst3= document.getElementById("Platillo_3Subtotal");
    	st3=precio_r3*precio_p3;
        pcst3.value=st3;
        pcst3.placeholder=st3;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }

    function updateCUATRO(data) { 
        precio_p4=data;
        
        var pc4 = document.getElementById("Platillo_4Costo");
        pc4.value=precio_p4;
        pc4.placeholder= "$" +precio_p4+" mxn";

        var pcst4= document.getElementById("Platillo_4Subtotal");
        st4=precio_r4*precio_p4;
        pcst4.value=st4;
        pcst4.placeholder=st4;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    function updateSTCUATRO(data){
    	precio_r4=data;

    	var pcst4= document.getElementById("Platillo_4Subtotal");
    	st4=precio_r4*precio_p4;
        pcst4.value=st4;
        pcst4.placeholder=st4;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    function updateCINCO(data) { 
        precio_p5=data;
        //alert(precio_p1);
        
        var pc5 = document.getElementById("Platillo_5Costo");
        pc5.value=precio_p5;
        pc5.placeholder= "$" +precio_p5+" mxn";

        var pcst5= document.getElementById("Platillo_5Subtotal");
        st5=precio_r5*precio_p5;
        pcst5.value=st5;
        pcst5.placeholder=st5;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    function updateSTCINCO(data){
    	precio_r5=data;

    	var pcst5= document.getElementById("Platillo_5Subtotal");
    	st5=precio_r5*precio_p5;
        pcst5.value=st5;
        pcst5.placeholder=st5;

        var total = document.getElementById("Total");
        total.value=st1+st2+st3+st4+st5;
        total.placeholder=st1+st2+st3+st4+st5;
    }
    
	//window.onload = Total;

</script>



<!-- Header -->
    <header class="header_orders">
        <div class="container" >
            <div class="intro-text">
                <div class="intro-heading page-scroll"><a href="#orders">Ordena tu comida con nosotros!</a></div>
                
            </div>
        </div>
    </header>
   
<!-- About Section -->
    <section id="orders">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Orders</h2>
                    <h3 class="section-subheading text-muted">Ordena con nosotros tu comida favorita y disfruta del mejor sabor que te ofrecemos hasta la comodidad de tu hogar.</h3>

                    <a href="#form_orders" class="page-scroll btn btn-xl" id="btn_orders">Continuar</a>

                </div>
            </div>
        </div>
    </section>

    <section id="form_orders" class="bg-darkest-gray">
    	<div class="container bg-light-gray form_delta">
    		<form class="form-horizontal" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
	    		<div class="row">
	    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h2>Ingresa los datos requeridos</h2>
	    				<p>Podras ordenar hasta CINCO platillos diferentes.</p>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-md-2 col-md-offset-1">
	    				<h3>Platillo 1</h3>

	    				<?php echo $PlatillosC->getDropDown('Precio','Nombre','platillos','Platillo_1','Platillo_1','UNO') ?>

	    				<label>Costo por Platillo: $ <input id="Platillo_1Costo" type="text" readonly="readonly" class="form-control" name="Costo1" >
                		</label>
	    				<select name="Platillo1_raciones" onchange="updateSTUNO(this.value)" class="form-control">
	    					<option value="0">Racion</option>
	    					<option value="1">1 Persona</option>
	    					<option value="2">2 Personas</option>
	    					<option value="3">3 Personas</option>
	    					<option value="4">4 Personas</option>
	    					<option value="5">5 Personas</option>
	    				</select>
	    				<label>Subtotal: $ <input id="Platillo_1Subtotal" value="0" type="text" readonly="readonly" class="form-control" name ="saldo_orden1">
                		</label>
	    			</div>

	    			<div class="col-md-2 col-md-offset-0">
	    				<h3>Platillo 2</h3>

	    				<?php echo $PlatillosC->getDropDown('Precio','Nombre','platillos','Platillo_2','Platillo_2', 'DOS') ?>

	    				<label>Costo por Platillo: $ <input id="Platillo_2Costo" type="text" readonly="readonly" class="form-control" Name="Costo2" >
                		</label>
	    				<select name="Platillo2_raciones" onchange="updateSTDOS(this.value)" class="form-control">
	    					<option value="0">Racion</option>
	    					<option value="1">1 Persona</option>
	    					<option value="2">2 Personas</option>
	    					<option value="3">3 Personas</option>
	    					<option value="4">4 Personas</option>
	    					<option value="5">5 Personas</option>
	    				</select>
	    				<label>Subtotal: $ <input id="Platillo_2Subtotal" type="text" value="0" readonly="readonly" class="form-control" name ="saldo_orden2">
                		</label>
	    			</div>

	    			<div class="col-md-2 col-md-offset-0">
	    				<h3>Platillo 3</h3>

	    				<?php echo $PlatillosC->getDropDown('Precio','Nombre','platillos','Platillo_3','Platillo_3','TRES') ?>

	    				<label>Costo por Platillo: $ <input id="Platillo_3Costo" type="text" readonly="readonly" class="form-control" Name="Costo3" >
                		</label>
	    				<select name="Platillo3_raciones" onchange="updateSTTRES(this.value)" class="form-control">
	    					<option value="0">Racion</option>
	    					<option value="1">1 Persona</option>
	    					<option value="2">2 Personas</option>
	    					<option value="3">3 Personas</option>
	    					<option value="4">4 Personas</option>
	    					<option value="5">5 Personas</option>
	    				</select>
	    				<label>Subtotal: $ <input id="Platillo_3Subtotal" type="text" value="0" readonly="readonly" class="form-control" name ="saldo_orden3">
                		</label>
	    			</div>

	    			<div class="col-md-2 col-md-offset-0">
	    				<h3>Platillo 4</h3>

	    				<?php echo $PlatillosC->getDropDown('Precio','Nombre','platillos','Platillo_4','Platillo_4','CUATRO') ?>

	    				<label>Costo por Platillo: $ <input id="Platillo_4Costo" type="text" readonly="readonly" class="form-control" name="Cost4" >
                		</label>
	    				<select name="Platillo4_raciones" onchange="updateSTCUATRO(this.value)" class="form-control">
	    					<option value="0">Racion</option>
	    					<option value="1">1 Persona</option>
	    					<option value="2">2 Personas</option>
	    					<option value="3">3 Personas</option>
	    					<option value="4">4 Personas</option>
	    					<option value="5">5 Personas</option>
	    				</select>
	    				<label>Subtotal: $ <input id="Platillo_4Subtotal" type="text" value="0" readonly="readonly" class="form-control" name ="saldo_orden4">
                		</label>
	    			</div>

	    			<div class="col-md-2 col-md-offset-0">
	    				<h3>Platillo 5</h3>

	    				<?php echo $PlatillosC->getDropDown('Precio','Nombre','platillos','Platillo_5','Platillo_5','CINCO') ?>

	    				<label>Costo por Platillo: $ <input id="Platillo_5Costo" type="text" readonly="readonly" class="form-control" name="Costo5">
                		</label>
	    				<select name="Platillo5_raciones" onchange="updateSTCINCO(this.value)" class="form-control">
	    					<option value="0">Racion</option>
	    					<option value="1">1 Persona</option>
	    					<option value="2">2 Personas</option>
	    					<option value="3">3 Personas</option>
	    					<option value="4">4 Personas</option>
	    					<option value="5">5 Personas</option>
	    				</select>
	    				<label>Subtotal: $ <input id="Platillo_5Subtotal" type="text" value="0" readonly="readonly" class="form-control" name ="saldo_orden5">
                		</label>
	    			</div>

	    		</div>
				
				<hr>

	    		<div class ="row">
	    			<div class="col-lg-12 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<label>TOTAL: $ <input id="Total" type="text" readonly="readonly" class="form-control"  >
                		</label>
	    			</div>
	    		</div>

	    		<hr>

	    		<div class="row">
	    			<div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h3>Datos personales</h3>
	    				<hr>
	    				<input type="text" name="nombre_cliente" value="" placeholder="Nombre" class="form-control">
	    				<hr>
	    				<input type="text" name="cp_cliente" value="" placeholder="CP" class="form-control">
	    				<hr>
	    				<input type="text" name="ciudad_cliente" value="" placeholder="Ciudad" class="form-control">
	    				<hr>
	    				<input type="text" name="colonia_cliente" value="" placeholder="Colonia" class="form-control">
	    				<hr>
	    				<input type="text" name="direccion_cliente" value="" placeholder="Direccion" class="form-control">
	    				<hr>
	    				<input type="tel" name="telefono_cliente" value="" placeholder="Telefono" class="form-control">
	    				<hr>
	    				<input type="email" name="email_cliente" value="" placeholder="Email" class="form-control">
	    				<hr>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-md-12" align="center">
	    				<input type="submit" name="" value="Ordenar" class="btn btn-xl">
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
                        <a href="<?php echo BASEURL ?>/views/reservations/reservations.php">
                            <h2 class="post-title">
                                Realiza una reservación con nosotros para esos momentos especiales.
                            </h2>
                        </a>
                        <p class="post-meta">Puedes realizar la reservacion cualquier día de la semana, reserva tu lugar preferido.</p>
                    </div>
                    <hr>
                </div>
            </div>
    

        </div>
    </section>

<?php include ('../layouts/footer.php'); ?>