<?php
class Platillos extends Modelo{
    public $nombre_tabla = 'platillos';
    public $pk = 'Id_platillo';
    
    
    public $atributos = array(
        'Tipo'=>array(),
        'Nombre'=>array(),
		'Descripcion'=>array(),
		'Precio'=>array(),
        'ImagenG'=>array(),
        'ImagenC'=>array(),
    );
    
    public $errores = array( );
    
    private $Tipo;
    private $Nombre;
	private $Descripcion;
	private $Precio;
    private $ImagenG;
    private $ImagenC;
       
    
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
        return $this->Tipo;
    } 

    public function set_tipo($valor){
		$this->Tipo = $valor;
    }

    public function get_nombre(){
        return $this->Nombre;
    }
    
    public function set_nombre($valor){
        $this->Nombre = $valor;
    }
	
	public function get_descripcion(){
        return $this->Descripcion;
    }
    
    public function set_descripcion($valor){
        $this->Descripcion = $valor;
    }
	
	public function get_precio(){
        return $this->Precio;
    }
    
    public function set_precio($valor){
        $this->Precio = $valor;
    }

    public function get_imagenG(){
        return $this->ImagenG;
    } 
    public function set_imagenG($valor){
        //trim simplemente quita espacios al principio y final de la cadena
        $this->ImagenG = "01".trim($valor);
    }
    
    public function get_imagenC(){
        return $this->ImagenC;
    } 
    public function set_imagenC($valor){
        //trim simplemente quita espacios al principio y final de la cadena
        $this->ImagenC = "02".trim($valor);
    }

}
?>