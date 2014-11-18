<?php
class Reservaciones extends Modelo{
    public $nombre_tabla = 'reservaciones';
    public $pk = 'Id_reservacion';
    
    
    public $atributos = array(
        'Fecha'=>array(),
        'Hora'=>array(),
		'Mesa'=>array(),
		'No_asientos'=>array(),
        'Costo'=>array(),
        'Cliente'=>array(),
    );
    
    public $errores = array( );
    
    private $Fecha;
    private $Hora;
	private $Mesa;
	private $No_asientos;
    private $Costo;
    private $Cliente;


       
    
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
        return $this->Fecha;
    } 

    public function set_fecha($valor){
		$this->Fecha = $valor;
    }

    public function get_hora(){
        return $this->Hora;
    }
    
    public function set_hora($valor){
        $this->Hora = $valor;
    }
	
	public function get_mesa(){
        return $this->Mesa;
    }
    
    public function set_mesa($valor){
        $this->Mesa = $valor;
    }
	
	public function get_nasientos(){
        return $this->No_asientos;
    }
    
    public function set_nasientos($valor){
        $this->No_asientos = $valor;
    }

    public function get_cliente(){
        return $this->Cliente;
    } 

    public function set_cliente($valor){
        $this->Cliente = $valor;
    }

    public function get_costo(){
        return $this->Costo;
    }
    
    public function set_costo($valor){
        $this->Costo = $valor;
    }    
    
}
?>