<?php
/*
Contine las clases 
*/


	class PedidoController extends Pedido{
		
		//Instancia de la clase Mesas
		public $muestra_errores = false;
		function __construct(){
			 parent::Pedido();
		}

		//Funcion para insertar una Orden
		public function inserta_Pedido($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    /*echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller';
		    echo "</pre>";
		    //die();*/
			//Conexion con Posision el cual continene a Modelo y Conexion
			//$pais=new Pais();

			$this->set_platillo($datos['platillo_pedido']);
			$this->set_raciones($datos['raciones_pedido']);

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

			public function ultimo_id(){
		    	$rs = $this->consulta_sql("SELECT MAX(Id_pedido) AS id FROM pedido");
				$rows = $rs->GetArray();
				 //print_r($rows['0']['id']);
				return $rows['0']['id'];
		    }


	}
?>