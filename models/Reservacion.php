<?php
class Reservacion extends Modelo{
    public $nombre_tabla = 'reservacion';
    public $pk = 'Id_reservacion';
    
    
    public $atributos = array(
        'Cliente'=>array(),
        'Saldo'=>array(),

    );
    
    public $errores = array( );
    
    private $Cliente;
    private $Saldo;


       
    
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
        return $this->sube;
    } 

    public function set_cliente($valor){
		$this->Cliente = $valor;
    }

    public function get_saldo(){
        return $this->baja;
    }
    
    public function set_saldo($valor){
        $this->Saldo = $valor;
    }

    
    
}
?>