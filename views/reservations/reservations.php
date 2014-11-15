
<?php 
  session_start();
  include ('../layouts/header.php');


?>


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
    	</div>
    </section>

    <section id="form_reservations" class="bg-darkest-gray">
    	<div class="container bg-light-gray form_delta">
    		<form>
	    		<div class="row">
	    			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h2>Ingresa los datos requeridos</h2>
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-lg-4 col-lg-offset-2 col-md-10 col-md-offset-1">
		    			<div class="form-group">
		    				<hr>
	                        <select name="mesa" class="form-control">
			    					<option value="">Selecciona Mesa</option>
			    					<option value="">Mesa 1</option>
			    					<option value="">Mesa 2</option>
			    					<option value="">Mesa 3</option>
			    					<option value="">Mesa 4</option>
			    					<option value="">Mesa 5</option>
			    					<option value="">Mesa 6</option>
			    					<option value="">Mesa 7</option>
			    					<option value="">Mesa 8</option>
			    					<option value="">Mesa 9</option>
			    					<option value="">Mesa 10</option>
			    					<option value="">Mesa 11</option>
			    					<option value="">Mesa 12</option>
			    					<option value="">Mesa 13</option>
			    					<option value="">Mesa 14</option>
			    					<option value="">Mesa 15</option>
			    					<option value="">Mesa 16</option>
			    					<option value="">Mesa 17</option>
			    					<option value="">Mesa 18</option>
			    					<option value="">Mesa 19</option>
			    					<option value="">Mesa 20</option>
			    				</select>
			    			<hr>
			    			<select name="mesa" class="form-control">
			    					<option value="">N&uacute;mero de lugares</option>
			    					<option value=""> 1</option>
			    					<option value=""> 2</option>
			    					<option value=""> 3</option>
			    					<option value=""> 4</option>
			    					<option value=""> 5</option>
			    					<option value=""> 6</option>
			    					<option value=""> 6 (2)</option>
			    					<option value=""> 6 (3)</option>
			    					<option value=""> 6 (4)</option>
			    			</select>
			    			<hr>
			    			<input type="date" name="Fecha" value="" placeholder="fecha" class="form-control">
			    			<hr>
			    			<input type="time" name="Hora" value="" placeholder="hora" class="form-control">
			    			<hr>
	         			</div>	    				
	    				
	    			</div>
	    			<div class="col-lg-4 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<img src="../img/reservations/mesas.png" alt="" width="100%" class="img-thumbnail">
	    			</div>
	    		</div>
	    		<div class="row">
	    			<div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
	    				<h3>Datos personales</h3>
	    				<hr>
	    				<input type="text" name="Nombre" value="" placeholder="Nombre" class="form-control">
	    				<hr>
	    				<input type="text" name="Direccion" value="" placeholder="Direccion" class="form-control">
	    				<hr>
	    				<input type="text" name="CP" value="" placeholder="CP" class="form-control">
	    				<hr>
	    				<input type="text" name="Ciudad" value="" placeholder="Ciudad" class="form-control">
	    				<hr>
	    				<input type="text" name="Colonia" value="" placeholder="Colonia" class="form-control">
	    				<hr>
	    				<input type="tel" name="Telefono" value="" placeholder="Telefono" class="form-control">
	    				<hr>
	    				<input type="email" name="Email" value="" placeholder="Email" class="form-control">
	    				<hr>
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