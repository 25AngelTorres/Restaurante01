<?php 
//VISTA PRIVADA
  include ('../../libs/security.php');

      include ('../layouts/header.php');
?>

<header class="header_home">
<section class="intro" >
	<header>
        <div class="container" >
            <div class="intro-text">
                <div class="intro-heading">Administrar Página y Restaurant</div>
                <a href="#administration" class="page-scroll btn btn-xl" id="btn_orders">Continuar</a>
            </div>
        </div>
    </header>      
</section>
</header>

<section id="administration" class="bg-light-gray">
	<div class="container" >
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="page-header">
                            <h1>Administrar Base de datos <small>Insertar</small></h1>
                        </div>
                        <p class="intro-text">Insertar dentro de la base de datos nueva información. Da clic en el &iacute;cono de abajo para ver las tablas donde puedes insertar.</p>

                    </div>
                </div>
                <br />
                    <div class="row" id="opc_inser_bd">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <a href="../Cartas/form_carta.php" class="list-group-item">Carta/Men&uacute;</a>
                                    <a href="../Platillos/form_platillos.php" class="list-group-item">Platillo</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-group">
                                    <a href="../Mesas/form_mesas.php" class="list-group-item">Mesas</a>
                                    <a href="../Report/form_report.php" class="list-group-item">Reporte</a>
                                </div>
                            </div>
                    </div>
            </div>
</section>

<?php include ('../layouts/footer.php'); ?>