
<?php 
  session_start();
  include ('../layouts/header.php');
?>


<!-- Header -->
    <header class="header_home">
        <div class="container">
            <!--/.SLIDESHOW -->
                <section>                
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="<?php echo BASEURL ?>/views/menu/menu.php" >
                                <img src="../img/2.jpg" alt="" />
                                </a>
                                    <div class="carousel-caption" >
                                        <h4 class="back-light">Primera opci&oacute;n.</h4>
                                    </div>
                            </div>
                            <div class="item ">
                                <a href="#services">
                                <img src="../img/1.jpg" alt="" />
                                </a>
                                <div class="carousel-caption ">
                                    <h4 class="back-light">Segunda opci&oacute;n.</h4>
                                </div>
                            </div>
                            <div class="item ">
                                <a href="<?php echo BASEURL ?>/views/service/service.php">
                                <img src="../img/3.jpg" alt="" />
                                </a>
                                <div class="carousel-caption ">
                                    <h4 class="back-light">Tercera opci&oacute;n.</h4>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example" data-slide-to="1"></li>
                            <li data-target="#carousel-example" data-slide-to="2"></li>
                        </ol>
                    </div>
                </section>
            <!--/.SLIDESHOW END-->
        </div>
    </header>


    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Informaci&oacute;n sobre el restaurant.</h3>
                </div>
            </div>
            <div class="row text-center">
                <p>
                    Informaci&oacute;n de interes sobre el restaurante que desee mostrar
                </p>
            </div>
        </div>
    </section>
   

    

<?php include ('../layouts/footer.php'); ?>