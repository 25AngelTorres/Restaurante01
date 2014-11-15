<?php
class Reservaciones extends Modelo{
    public $nombre_tabla = 'reservaciones';
    public $pk = 'Id_reservacion';
    
    
    public $atributos = array(
        'Fecha'=>array(),
        'Hora'=>array(),
		'Mesa'=>array(),
		'No_asientos'=>array(),

    );
    
    public $errores = array( );
    
    private $Fecha;
    private $Hora;
	private $Mesa;
	private $No_asientos;


       
    
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
    
    
    public function get_fecha(){
        return $this->sube;
    } 

    public function set_fecha($valor){
		$this->Fecha = $valor;
    }

    public function get_hora(){
        return $this->baja;
    }
    
    public function set_hora($valor){
        $this->Hora = $valor;
    }
	
	public function get_mesa(){
        return $this->baja;
    }
    
    public function set_mesa($valor){
        $this->Mesa = $valor;
    }
	
	public function get_nasientos(){
        return $this->baja;
    }
    
    public function set_nasientos($valor){
        $this->No_asientos = $valor;
    }

    
    
}
?>