<?php
/*
Contine las clases 
*/


	class OrdenController extends Orden{
		
		//Instancia de la clase Mesas
		public $muestra_errores = false;
		function __construct(){
			 parent::Orden();
		}

		//Funcion para insertar una Orden
		public function inserta_Orden($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    /*echo "<pre>";
		      print_r($cliente_orden);
		      print_r($pedido_orden);
		      echo   'Desde Controller';
		    echo "</pre>";
		    die();*/
			//Conexion con Posision el cual continene a Modelo y Conexion
			//$pais=new Pais();

			$this->set_cliente($datos['cliente_orden']);
			$this->set_pedido($datos['pedido_orden']);
			$this->set_saldo($datos['saldo_orden']);


			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
				//Insertar en la base de datos
				$this->inserta($this->get_atributos());
				//echo '<div class="alert alert-success" role="alert">Insercion Correcta</div>';
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
			}


	}
?>