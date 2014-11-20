<?php
/*
Contine las clases 
*/

	class PlatillosController extends Platillos {
		
		//Instancia de la clase Platillos
		public $muestra_errores = false;
		public $muestra_exito=false;
		function __construct(){
			 parent::Platillos();
		}

		//Funcion para insertar una mesa
		public function inserta_platillos($datos, $files){
			//Solo es para acegurarse que se estan enviando los archivos
		    /*echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';

		    echo "</pre>";*/
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$status=new Status();

			$this->set_tipo($datos['tipo_platillos']);
			$this->set_nombre($datos['nombre_platillos']);
			$this->set_descripcion($datos['descripcion_platillos']);
			$this->set_precio($datos['precio_platillos']);
			$this->set_imagenG($datos['nombre_platillos']);
			$this->set_imagenC($datos['nombre_platillos']);
			
			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
				/*print_r($status->errores);
				die();*/
			}
			else{
				$this->muestra_exito=true;
				//Copiar la direccion del archivo a un nueva carpeta
				move_uploaded_file($files['ImagenG']['tmp_name'], "../img/menu/01".$datos['nombre_platillos'].'.jpg');
				move_uploaded_file($files['ImagenC']['tmp_name'], "../img/menu/02".$datos['nombre_platillos'].'.jpg');
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());
			}
			//Detener un script *die();

		}

		public function errores(){
			if ($this->muestra_errores) {
				echo '<div class="alert alert-danger">';
                	foreach ($this->errores as $value) {
                  	echo "<p>".$value."</p>";
                	}  
            	echo '</div>';
			}
			if ($this->muestra_exito) {
				echo '<div class="alert alert-success" role="alert"><h4>Insercion Correcta</h4></div>';
			}
		}

		//Generar select
	    public function getDropDown($id_tabla,$nombre_columna,$tabla,$name,$id, $onchange, $where = ' '){
	         $rs = $this->consulta_sql(" select * from $tabla ".$where);
	         $rows = $rs->GetArray();
	         $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'" onchange="update'.$onchange.'(this.value)">
	                        <option value="0">Selecciona de la lista </option>';
	         foreach ($rows as $key => $value) {
	         	$Precio = $value[$id_tabla];
	            $dropDown.= '<option value="'.$Precio.'">'.utf8_encode($value[$nombre_columna]).'</option>';
	            
	         }
	         $dropDown.= '</select>'; 
	         return $dropDown;
	    }


	    public function muestraPlatillos ($tipo)
	    {
	    	$rs = $this->consulta_sql(' select * from platillos where Tipo = "'.$tipo.'"');
	        $rows = $rs->GetArray();
	        $Mostrar = '';
	        foreach ($rows as $key => $value) {
	        	$Mostrar.= '<div class="row">
	        					<div class="col-md-12 col-sm-12 portfolio-item">
			        				<a href="#portfolio'.$value['Id_platillo'].'" class="portfolio-link" data-toggle="modal">
			        				<div class="portfolio-hover">
			                            <div class="portfolio-hover-content">
			                                <i class="fa fa-plus fa-3x"></i>
			                            </div>
			                        </div>
			                        <img src="../img/menu/02'.$value['Nombre'].'.jpg" class="img-responsive" alt="">
					                    </a>
					                    <div class="portfolio-caption">
					                        <h4>'.$value['Nombre'].'</h4>
					                    </div>
				                </div>
				            </div>
	        				';
	        }
	        foreach ($rows as $key => $value) {

	        	$Mostrar.='
	        				<!-- Menu Modal 1 -->
						    <div class="portfolio-modal modal fade" id="portfolio'.$value['Id_platillo'].'" tabindex="-1" role="dialog" aria-hidden="true">
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
						                            <h2>'.$value['Nombre'].'</h2>
						                            <img class="img-responsive" src="../img/menu/01'.$value['Nombre'].'.jpg" alt="">
						                            <p><h3>Ingredientes</h3></p>
						                            <p>
						                            	'.$value['Descripcion'].'
						                            </p>
						                            <p><h3>Precio*</h3></p>
						                            <p><h3>
						                            	$'.$value['Precio'].'
						                            	</h3>
						                            * Por platillo
						                            </p>
						                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
						    </div>
						    ';
			}
	        return $Mostrar;

	    }

	}
?>