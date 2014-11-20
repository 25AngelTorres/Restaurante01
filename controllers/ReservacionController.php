<?php
/*
Contine las clases 
*/

	class ReservacionController extends Reservacion {
		
		//Instancia de la clase Reservacion
		public $muestra_errores = false;
		public $muestra_exito=false;
		function __construct(){
			 parent::Reservacion();
		}

		//Funcion para insertar una mesa
		public function inserta_reservacion($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller Reservacion';

		    echo "</pre>";
		    
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$status=new Status();


			$this->set_costo($datos['costo_reservacion']);

			$this->set_cliente($datos['cliente']);
			
			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
				/*print_r($status->errores);
				die();*/
			}
			else{
				$this->muestra_exito=true;
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
	    public function getDropDown($id_tabla,$nombre_columna,$tabla,$name,$id, $Precio, $where = ' '){
	         $rs = $this->consulta_sql(" select * from $tabla ".$where);
	         $rows = $rs->GetArray();
	         $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'" onchange="updatevariable(this.value)">
	                        <option value="">Selecciona de la lista </option>';
	         foreach ($rows as $key => $value) {
	            $dropDown.= '<option value="'.$value[$Precio].'">'.utf8_encode($value[$nombre_columna]).'</option>';
	         }
	         $dropDown.= '</select>'; 
	         return $dropDown;
	    }

	}
?>