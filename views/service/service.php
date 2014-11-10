
<?php 
  session_start();
  include ('../layouts/header.php');
?>


<!-- Header -->
    <header class="header_service">
        <div class="container" >
            <div class="intro-text">
                <div class="intro-heading">Welcome To Our Services!</div>
                <a href="#services" class="page-scroll btn btn-xl">servicios</a>
            </div>
        </div>
    </header>
   
<!-- About Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted">Conoce los servicios que te ofrecemos.</h3>
                </div>
            </div>
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