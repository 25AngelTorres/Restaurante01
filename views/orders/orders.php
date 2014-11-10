
<?php 
  session_start();
  include ('../layouts/header.php');
?>


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
    		<form>
	    		<div class="row">
	    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h2>Ingresa los datos requeridos</h2>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h3>Platillo</h3>
	    				<select name="Platillo" >
	    					<option value="">Selecciona platillo</option>
	    					<option value="">Platillo 1</option>
	    					<option value="">Platillo 2</option>
	    					<option value="">Platillo 3</option>
	    					<option value="">Platillo 4</option>
	    					<option value="">Platillo 5</option>
	    					<option value="">Platillo 6</option>
	    					<option value="">Platillo 7</option>
	    					<option value="">Platillo 8</option>
	    					<option value="">Platillo 9</option>
	    				</select>
	    				<hr>
	    				<select name="Raciones" >
	    					<option value="">Racion</option>
	    					<option value="">1 Persona</option>
	    					<option value="">2 Personas</option>
	    					<option value="">3 Personas</option>
	    					<option value="">4 Personas</option>
	    					<option value="">5 Personas</option>
	    				</select>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h3>Datos personales</h3>
	    				<hr>
	    				<input type="text" name="Nombre" value="" placeholder="Nombre">
	    				<hr>
	    				<input type="text" name="CP" value="" placeholder="CP">
	    				<hr>
	    				<input type="text" name="Ciudad" value="" placeholder="Ciudad">
	    				<hr>
	    				<input type="text" name="Colonia" value="" placeholder="Colonia">
	    				<hr>
	    				<input type="text" name="Direccion" value="" placeholder="Direccion">
	    				<hr>
	    				<input type="tel" name="Telefono" value="" placeholder="Telefono">
	    				<hr>
	    				<input type="email" name="Email" value="" placeholder="Email">		
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