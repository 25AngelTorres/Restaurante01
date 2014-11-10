
<?php 
  session_start();
  include ('../layouts/header.php');


?>


<!-- Header -->
    <header class="header_reservations">
        <div class="container" >
            <div class="intro-text">
                <div class="intro-heading">Reserva tu lugar con nosotros!</div>
                <a href="#services" class="page-scroll btn btn-xl">Resrvaci&oacute;n</a>
            </div>
        </div>
    </header>
   
<!-- About Section -->
    <section id="services">
        <div class="container">
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
    	<div class="container bg-light-gray">
    		Aqui va el formulario
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