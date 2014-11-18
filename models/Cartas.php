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
        return $this->Tipo;
    } 

    public function set_tipo($valor){
		$this->Tipo = $valor;
    }

    public function get_descripcion(){
        return $this->Descripcion;
    }
    
    public function set_descripcion($valor){
        $this->Descripcion = $valor;
    }
    


    
    
    
}
?>