<?php
class Platillos extends Modelo{
    public $nombre_tabla = 'platillos';
    public $pk = 'Id_platillo';
    
    
    public $atributos = array(
        'Tipo'=>array(),
        'Nombre'=>array(),
		'Descripcion'=>array(),
		'Precio'=>array(),

    );
    
    public $errores = array( );
    
    private $Tipo;
    private $Nombre;
	private $Descripcion;
	private $Precio;


       
    
    function Platillos(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_tipo(){
        return $this->sube;
    } 

    public function set_tipo($valor){
		$this->Tipo = $valor;
    }

    public function get_nombre(){
        return $this->baja;
    }
    
    public function set_nombre($valor){
        $this->Nombre = $valor;
    }
	
	public function get_descripcion(){
        return $this->baja;
    }
    
    public function set_descripcion($valor){
        $this->Descripcion = $valor;
    }
	
	public function get_precio(){
        return $this->baja;
    }
    
    public function set_precio($valor){
        $this->Precio = $valor;
    }

    
    
}
?>