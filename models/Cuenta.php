<?php
class Cuenta extends Modelo{
    public $nombre_tabla = 'cuenta';
    public $pk = 'No_cuenta';
    
    
    public $atributos = array(
        'Cliente'=>array(),
        'SaldoTotal'=>array(),
    );
    
    public $errores = array( );
    
    private $Cliente;
    private $SaldoTotal;

       
    
    function Cuenta(){
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

    public function get_saldoTotal(){
        return $this->baja;
    }
    
    public function set_saldoTotal($valor){
        $this->SaldoTotal = $valor;
    }
    
    
}
?>