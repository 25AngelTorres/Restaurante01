<?php
class Cartas extends Modelo{
    public $nombre_tabla = 'cartas';
    public $pk = 'Id_carta';
    
    
    public $atributos = array(
        'Tipo'=>array(),
        'Descripcion'=>array(),
    );
    
    public $errores = array( );
    
    private $Tipo;
    private $Descripcion;

       
    
    function Cartas(){
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
        return $this->sube;
    } 

    public function set_tipo($valor){
		$this->Tipo = $valor;
    }

    public function get_descripcion(){
        return $this->baja;
    }
    
    public function set_password($valor){
        $this->Descripcion = trim( md5($valor) );
    }
    


    
    
    
}
?>