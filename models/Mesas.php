<?php
class Mesas extends Modelo{
    public $nombre_tabla = 'mesas';
    public $pk = 'Id_mesa';
    
    
    public $atributos = array(
        'Nombre'=>array(),
        'Precio'=>array(),
    );
    
    public $errores = array( );
    
    private $Nombre;
    private $Precio;

       
    
    function Mesas(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->sube;
    } 

    public function set_nombre($valor){
		$this->Nombre = $valor;
    }

    public function get_precio(){
        return $this->baja;
    }
    
    public function set_precio($valor){
        $this->Precio = $valor;
    }
    
    
}
?>