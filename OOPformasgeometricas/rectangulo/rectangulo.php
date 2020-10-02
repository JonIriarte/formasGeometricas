<?php
class rectangulo{
    //Atributos
    private $base; 
    private $altura; 

    //Constructor
    function __construct($base,$altura){
        $this->base=$base; 
        $this->altura=$altura; 
    }
//Métodos propios
public function areaRectangulo(){
    $area = ($this->base*$this->altura); 
    return $area; 
}

public function perimetroRectangulo(){
    $perimetro = 2*($this->base+$this->altura);
    return $perimetro; 

}

}



?>