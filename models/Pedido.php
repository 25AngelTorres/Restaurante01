<?php
class Pedido extends Modelo{
    public $nombre_tabla = 'pedido';
    public $pk = 'Id_pedido';
    
    
    public $atributos = array(
        'Platillo'=>array(),
        'Raciones'=>array(),

    );
    
    public $errores = array( );
    
    private $Platillo;
    private $Raciones;


       
    
    function Pedido(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_platillo(){
        return $this->sube;
    } 

    public function set_platillo($valor){
		$this->Platillo = $valor;
    }

    public function get_raciones(){
        return $this->baja;
    }
    
    public function set_raciones($valor){
        $this->Raciones = $valor;
    }

    
    
}
?>