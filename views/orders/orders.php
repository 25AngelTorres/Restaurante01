
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
    	Aqui va el formulario
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