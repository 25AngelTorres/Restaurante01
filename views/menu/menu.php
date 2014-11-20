
<?php 
  session_start();
  include ('../layouts/header.php');

  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Platillos.php');                 //Archivo independiente a cada tabla
  include ('../../controllers/PlatillosController.php');
  include ('../../libs/Er.php');

$PlatillosC = new PlatillosController();
?>


<!-- Header -->
    <header class="header_menu">
        <div class="container" >
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Menu!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#carta" class="page-scroll btn btn-xl">Carta</a>
            </div>
        </div>
    </header>



    <section id="carta">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Men&uacute;</h2>
                    <h3 class="section-subheading text-muted">Comida que podras encontrar en nuestro Restaurant.</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <hr>
                    <div class="post-preview">
                        <a href="#desayuno" id="linkdesayuno">
                            <h2 class="post-title">
                                Desayunos
                            </h2>
                        </a>
                        <p class="post-meta">Comida deliciosa para comenzar un excelente d&iacute;a.</p>
                    </div>
                    <div id="desayuno">
                    <div id="portfolio" class="bg-light-gray">

                            <?php echo $PlatillosC->muestraPlatillos(2); ?>

                    </div>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="#mexicana" id="linkmexicana">
                            <h2 class="post-title">
                                Comida tradicional mexicana
                            </h2>
                        </a>
                        <p class="post-meta">Deleitate con un delicioso platillo regional.</p>
                    </div>
                    <div id="mexicana">
                    <div id="portfolio" class="bg-light-gray">

                            <?php echo $PlatillosC->muestraPlatillos(1); ?>

                    </div>
                    </div>
                    <hr>
                    <div class="post-preview">
                        <a href="#gourmet" id="linkgourmet">
                            <h2 class="post-title" >
                                Gourmet
                            </h2>
                        </a>
                        <p class="post-meta">Comida expl&iacute;cita, atractiva y &uacute;nica en su sabor.</p>
                    </div>
                    <div id="gourmet">
                    <div id="portfolio" class="bg-light-gray">

                            <?php echo $PlatillosC->muestraPlatillos(3); ?>

                    </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>








<?php include ('../layouts/footer.php'); ?>