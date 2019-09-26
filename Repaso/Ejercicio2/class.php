<?php

class ciudad {
    public $ciudad;
    public $provincia;


    function __construct($ciudad,$provincia){
        $this->cuidad=$ciudad;
        $this->provincia=$provincia;
    }
    public function getCiudad(){
        echo 'La ciudad'.$this->ciudad.'pertenece a la provincia'.$this->provincia;
        
    }
}

$ciudad1 = new ciudad ('Pepe','Jose');
$ciudad2 = new ciudad ('Almenara','Castellon');
$ciudad3 = new ciudad ('Cocentaina','Alicante');

$ciudad1->getCiudad();echo '<br>';
$ciudad2->getCiudad2();echo '<br>';
$ciudad3->getCiudad3();
?>