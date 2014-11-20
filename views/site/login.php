<?php 
session_start();     
include ('../layouts/header.php');
      //include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuario.php');
      include ('../../models/Cliente.php');
      include ('../../controllers/siteController/LoginController.php');
      include ('../../controllers/ClienteController.php');
      include ('../../libs/Er.php');
     
      $login = new LoginController();
      $ClienteC = new ClienteController();
      
      if (isset($_POST['email'])
          && isset($_POST['password'])
          ) {
          /*echo "<pre>";
          print_r($_POST);
          echo "</pre>";
          //die();*/

          if (isset($_POST['administrador']) && $_POST['administrador']=="1") {
            $login->validaUsuario($_POST);
            
          } else {
            $ClienteC -> validaUsuario($_POST);
          }
          

      }

  if (isset($_POST['nombre_cliente'])
      && isset($_POST['cp_cliente'])
      && isset($_POST['ciudad_cliente'])
      && isset($_POST['colonia_cliente'])
      && isset($_POST['direccion_cliente'])
      && isset($_POST['telefono_cliente'])
      && isset($_POST['email_cliente'])
      && isset($_POST['password_cliente'])
    ) {

        if ($ClienteC -> verificaExistencia($_POST)) {
            $ClienteC -> inserta_cliente($_POST);
        }
  }
      
?>

<script type="text/javascript">
  function verificarPassword(dato){
    //alert(dato);
    var pass1= document.getElementById("password_C");
    var pass2M= document.getElementById("password_CRM");
    if(pass1.value=dato){
      //alert("Coinciden");
      pass2M.placeholder="Contraseñas coinciden";
    }else{
      pass2Mplaceholder="Contraseñas NO coinciden";
    }
  }

</script>



<header class="header_home">
  

<section class="intro" >
        <div class="intro-body" id="login">
            <div class="container">
                <div class="row">
                    
                  <div class="col-md-6 col-md-offset-3">
                        <?php
                            echo $ClienteC -> errores(); ?>
                  
                        <form role="form" method="POST" class="registerForm">
                          <div class="form-group">
                            <label for="email">Usuario</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Usuario">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                          </div>

                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="administrador" value="1"> Administrador
                            </label>
                          </div>
    
                          <div class="col-md-12" align="center">
                            <input type="submit" name="" value="Iniciar" class="btn btn-xl">
                          </div>


                        </form>
                  </div>


                </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p><a href="#crearCuenta"><h5>Crear una cuenta</h5></a></p>
                  </div>
                </div>
            </div> <!--container-->
        </div>
      
</section>

</header><!-- /header -->


<section id="crearCuenta" class="bg-light-gray">
  <div class="container">
    <form class="form-horizontal registerForm" role="form" id="registerForm" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <h2>Ingresa los datos requeridos</h2>
          <p>Crear una cuenta con nosotros para acceder mas fácilmente a nuestros servicios.</p>
        </div>
        <div class="row">
            <div class="col-lg-9 col-lg-offset-2 col-md-10 col-md-offset-1">
              <h3>Datos personales</h3>
              <hr>
                <?php echo $ClienteC -> errores(); ?>
              
              <div class="form-group">
              <input type="text" name="nombre_cliente" value="" placeholder="Nombre" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <input type="email" name="email_cliente" value="" placeholder="Email" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <label for="password_C">Contraseña:</label>
              <input type="password" id="password_C" name="password_cliente" placehlder="Password" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <label for="password_CR">Repetir Contraseña:</label>
              <input type="password" id="password_CR" placehlder="Password" class="form-control" onchange="verificarPassword(this.value)">
              <input id="password_CRM" type="text" readonly="readonly" class="form-control"  >
              </div>
              <hr>
              <div class="form-group">
              <input type="text" name="cp_cliente" value="" placeholder="CP" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <input type="text" name="ciudad_cliente" value="" placeholder="Ciudad" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <input type="text" name="colonia_cliente" value="" placeholder="Colonia" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <input type="text" name="direccion_cliente" value="" placeholder="Direccion" class="form-control">
              </div>
              <hr>
              <div class="form-group">
              <input type="number" name="telefono_cliente" value="" placeholder="Telefono" class="form-control">
              </div>
              <hr>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" align="center">
              <input type="submit" name="" value="Registrar" class="btn btn-xl">
            </div>
          </div>
        
      </div>
    </form>
  </div>
</section>




<?php include ('../layouts/footer.php'); ?>