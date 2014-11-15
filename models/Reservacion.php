<?php
class Reservacion extends Modelo{
    public $nombre_tabla = 'reservacion';
    public $pk = 'Id_reservacion';
    
    
    public $atributos = array(
        'Cliente'=>array(),
        'Costo'=>array(),

    );
    
    public $errores = array( );
    
    private $Cliente;
    private $Costo;


       
    
    function Reservacion(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
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