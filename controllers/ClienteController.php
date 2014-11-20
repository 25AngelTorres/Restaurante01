<?php
/*
Contine las clases 
*/

	class ClienteController extends Cliente {
		
		//Instancia de la clase Cliente
		public $muestra_errores = false;
		public $muestra_exito=false;
		function __construct(){
			 parent::Cliente();
		}

		//Funcion para insertar una mesa
		public function inserta_cliente($datos){
			//Solo es para acegurarse que se estan enviando los archivos
		    /*echo "<pre>";
		      print_r($datos);
		      echo   'Desde Controller Cliente';

		    echo "</pre>";
			die();*/
		    
			//Conexion con Equipo el cual continene Modelo y Conexion
			//$status=new Status();


			$this->set_nombre($datos['nombre_cliente']);
			$this->set_cp($datos['cp_cliente']);
			$this->set_ciudad($datos['ciudad_cliente']);
			$this->set_colonia($datos['colonia_cliente']);
			$this->set_direccion($datos['direccion_cliente']);
			$this->set_telefono($datos['telefono_cliente']);
			$this->set_email($datos['email_cliente']);
			
			if (isset($datos['password_cliente'])) {
				$this->set_password($datos['password_cliente']);
			}
			
			
			//Verificar si existen errores
			if(count ($this->errores)>0){
				$this->muestra_errores=true;
			}
			else{
				$this->muestra_exito=true;
				//Insertar en la Base de datos
				$this->inserta($this->get_atributos());
				//$this -> iniciarSesion($datos['email_cliente']);
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
				echo '<div class="alert alert-success" role="alert"><h4>Registro exitoso</h4></div>';
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

	    public function consulta_id(){
	    	$rs = $this->consulta_sql("SELECT MAX(Id_cte) AS id FROM cliente");
			$rows = $rs->GetArray();
			 //print_r($rows['0']['id']);
			return $rows['0']['id'];
	    }


	    public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from cliente where Email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['Password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['Email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}
		}
		public function verificaExistencia($datos){
			$rs = $this->consulta_sql(" select * from cliente where Email = '".$datos['email_cliente']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		$this->muestra_errores = true;
		     	$this->errores[] = 'Este usuario (email) ya esta registrado';
		     	return false;
        	}else
        	return true;
		}
		public function iniciarSesion($email){
			$_SESSION['rol'] = '0';
			$_SESSION['user'] = $email;
			$_SESSION['id_cte']= $this-> session_cte('Id_cte',$email);
			$_SESSION['email']= $_SESSION['user'];
			$_SESSION['nombre']= $this-> session_cte('Nombre',$email);

			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}
		public function session_cte($Columna,$email){
			$rs = $this->consulta_sql(" select ".$Columna." from cliente where Email = '".$email."'  ");
        	$rows = $rs->GetArray();
        	return $rows['0'][$Columna];
		}

		public function session_cerrarSesion(){
			session_destroy();
			header('location:views/reservations/reservations.php');
		}

	}
?>