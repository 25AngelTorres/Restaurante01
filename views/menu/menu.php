
<?php 
  session_start();
  include ('../layouts/header.php');
?>


<!-- Header -->
    <header class="header_menu">
        <div class="container" >
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Menu!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#portfolio" class="page-scroll btn btn-xl">Carta</a>
            </div>
        </div>
    </header>


    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Men&uacute;</h2>
                    <h3 class="section-subheading text-muted">Comida que podras encontrar en nuestro Restaurant.</h3>
                </div>
            </div>
            <div class="row">
<!-- menu_01 MODAL 01 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/menu01.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Fideo soba</h4>
                        <p class="text-muted">con atún</p>
                    </div>
                </div>
<!--menu_02 MODAL 02 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/menu02.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Conejo</h4>
                        <p class="text-muted">en pulque</p>
                    </div>
                </div>

<!-- menu_03 MODAL 03 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/menu03.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Risotto Di Brasato</h4>
                        <p class="text-muted">Di Vitello</p>
                    </div>
                </div>
<!-- menu_04 MODAL 04 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/menu04.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Flores</h4>
                        <p class="text-muted">Rellenas</p>
                    </div>
                </div>
<!-- menu_05 MODAL 05 -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/menu05.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pollo</h4>
                        <p class="text-muted">al Coñac</p>
                    </div>
                </div>
<!-- menu_06 MODAL 06-->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="../img/portfolio/menu06.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Cazuela</h4>
                        <p class="text-muted">de Vacuno</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Menu Modals -->
    <!-- Use the modals below to showcase details about your Menu -->

    <!-- Menu Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Fideo soba</h2>
                            <p class="item-intro text-muted">con at&uacute;n.</p>
                            <img class="img-responsive" src="../img/portfolio/menu_01.jpg" alt="">
                            <p><h3>Ingredientes</h3></p>
                            <p>
                                nidos de noodles de trigo, 
                                aceite de ajonjolí, 
                                salsa de soya, 
                                ajonjolí, 
                                espárragos, 
                                lomode atún fresco.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Menu Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Conejo</h2>
                            <p class="item-intro text-muted">Al pulque</p>
                            <img class="img-responsive img-centered" src="../img/portfolio/menu_02.jpg" alt="">
                            <p><h3>Ingredientes</h3></p>
                            <p>
                                chile pasilla limpio, desvenado y asado, 
                                tomate asado, 
                                cebolla asada, 
                                dientes de ajo asados, 
                                comino, 
                                conejo, 
                                300 ml de pulque
                            </p>
                            <p></p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Risotto</h2>
                            <p class="item-intro text-muted"> di Brasato du Vitello</p>
                            <img class="img-responsive img-centered" src="../img/portfolio/menu_03.jpg" alt="">
                            <p><h3>Ingredientes.</h3></p>
                            <p>
                                cdta de cebolla, picada, 
                                dientes de ajo, picados, 
                                aceite de oliva, 
                                champiñones blancos, fileteados, 
                                40 gr de ternera, previamente braseada, 
                                rodajas de tomate deshidratado, 
                                vino blanco seco, 
                                arroz Arborio, 
                                tomillo, 
                                cdta de mantequilla, 
                                cda de queso Parmesano, rallado.
                            </p>
                            
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Flores</h2>
                            <p class="item-intro text-muted">rellenas.</p>
                            <img class="img-responsive img-centered" src="../img/portfolio/menu_04.jpg" alt="">
                            <p><h3>Ingredientes</h3></p>
                            <p>
                                <strong>Mole de frijol: </strong> frijol, agua, ajo, cebolla. 
                                <strong>Chips de Calabaza: </strong> harina, yema de huevo, agua mineral, calabaza. 
                                <strong>flores: </strong> flor de calabaza, queso Oaxaca, crema ácida, salsa verde.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Pollo</h2>
                            <p class="item-intro text-muted">al Coñac.</p>
                            <img class="img-responsive img-centered" src="../img/portfolio/menu_05.jpg" alt="">
                            <p><h3>Ingredientes.</h3></p>
                            <p>
                                Presas de pollo sin piel, Sal, Pimienta Negra Molida Gourmet, Ajo en Polvo Gourmet, Orégano Entero Gourmet, 
                                Jugo de un limón, mantequilla, cebolla rallada, Coñac, vino blanco, caldo de pollo, Ají de color Gourmet para espolvorear.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Cazuela</h2>
                            <p class="item-intro text-muted">de Vacuno.</p>
                            <img class="img-responsive img-centered" src="../img/portfolio/menu_06.jpg" alt="">
                            <p><h3>Ingredientes.</h3></p>
                            <p>
                                Tapapecho o Asado de tira, Pimentón (picado en tiras), dientes de Ajo, Zanahoria (picada en tiras), 
                                Apio, Papas, Porotos Verdes, Zapallo, Arroz, Choclo, Perejil picado, agua fría, 
                                Orégano Entero Gourmet, Cebolla Sal condimentada Gourmet, Ajo Sal condimentada Gourmet, 
                                Pimienta Blanca Molida Gourmet (en pequeña cantidad), Sal.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php include ('../layouts/footer.php'); ?>