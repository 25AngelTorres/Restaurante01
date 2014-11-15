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
        'Email'=>array(),
    );
    
    public $errores = array( );
    
    private $Nombre;
    private $CP;
	private $Ciudad;
	private $Colonia;
	private $Direccion;
	private $Telefono;
    private $Email;

       
    
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
        return $this->Nombre;
    } 

    public function set_nombre($valor){
		$this->Nombre = $valor;
    }

    public function get_cp(){
        return $this->CP;
    }
    
    public function set_cp($valor){
        $this->CP = $valor;
    }
    
    public function get_ciudad(){
        return $this->Ciudad;
    }
    
    public function set_ciudad($valor){
        $this->Ciudad = $valor;
    }
	
	public function get_colonia(){
        return $this->Colonia;
    }
    
    public function set_colonia($valor){
        $this->Colonia = $valor;
    }
	
	public function get_direccion(){
        return $this->Direccion;
    }
    
    public function set_direccion($valor){
        $this->Direccion = $valor;
    }
	
	public function get_telefono(){
        return $this->Telefono;
    }
    
    public function set_telefono($valor){
        $this->Telefono = $valor;
    }
    
    public function get_email(){
        return $this->Email;
    }

    public function set_email($valor){
        $this->Email = $valor;
    }
    
}
?>