<?php
class Cliente extends Modelo{
    public $nombre_tabla = 'cliente';
    public $pk = 'Id_cte';
    
    
    public $atributos = array(
        'Nombre'=>array(),
        'CP'=>array(),
		'Ciudad'=>array(),
		'Colonia'=>array(),
		'Direccion'=>array(),
		'Telefono'=>array(),
    );
    
    public $errores = array( );
    
    private $Nombre;
    private $CP;
	private $Ciudad;
	private $Colonia;
	private $Direccion;
	private $Telefono;

       
    
    function Cliente(){
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
		$this->Tipo = $valor;
    }

    public function get_cp(){
        return $this->baja;
    }
    
    public function set_cp($valor){
        $this->Descripcion = $valor;
    }
    
    public function get_ciudad(){
        return $this->baja;
    }
    
    public function set_ciudad($valor){
        $this->Ciudad = $valor;
    }
	
	public function get_colonia(){
        return $this->baja;
    }
    
    public function set_colonia($valor){
        $this->Colonia = $valor;
    }
	
	public function get_direccion(){
        return $this->baja;
    }
    
    public function set_direccion($valor){
        $this->Direccion = $valor;
    }
	
	public function get_telefono(){
        return $this->baja;
    }
    
    public function set_telefono($valor){
        $this->Telefono = $valor;
    }
    
}
?>