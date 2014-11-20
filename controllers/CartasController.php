<?php
/*
Contine las clases 
*/

//	class CartasController extends Mesas{
	class CartasController extends Cartas{
		
		//Instancia de la clase Cartas
		public $muestra_errores = false;
		public $muestra_exito = false;
		function __construct(){
			 parent::Cartas();
		}

		//Funcion para insertar una carta
		public function inserta_cartas($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    /*echo "<pre>";
		      print_r($datos);
		      print_r($files);
		      echo   'Desde Controller';
		    echo "</pre>";
		    die();*/
			//Conexion con Posision el cual continene a Modelo y Conexion
			//$pais=new Pais();

			$this->set_descripcion($datos['descripcion_cartas']);
			$this->set_tipo($datos['tipo_cartas']);


			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
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

			public function listado(){

			}

	}
?>