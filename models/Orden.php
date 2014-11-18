<?php
class Orden extends Modelo{
    public $nombre_tabla = 'orden';
    public $pk = 'No_orden';
    
    
    public $atributos = array(
        'Cliente'=>array(),
        'Pedido'=>array(),
		'Saldo'=>array(),
    );
    
    public $errores = array( );
    
    private $Cliente;
    private $Pedido;
	private $Saldo;

       
    
    function Orden(){
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

    public function get_pedido(){
        return $this->Pedido;
    }
    
    public function set_pedido($valor){
        $this->Pedido = $valor;
    }
	
	public function get_saldo(){
        return $this->Saldo;
    }
    
    public function set_saldo($valor){
        $this->Saldo = $valor;
    }
    
    
}
?>