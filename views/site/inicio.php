
<?php 
  session_start();
  include ('../layouts/header.php');
?>


<!--/.SLIDESHOW -->     
   <section id="home" class="text-center">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../img/1.jpg" alt="" />
                        <div class="carousel-caption" >
                            <h4 class="back-light">Primera opci&oacute;n.</h4>
                        </div>
                </div>
                <div class="item">
                    <img src="../img/2.jpg" alt="" />
                    <div class="carousel-caption ">
                        <h4 class="back-light">Segunda opci&oacute;n.</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="../img/3.jpg" alt="" />
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


<?php include ('../layouts/footer.php'); ?>