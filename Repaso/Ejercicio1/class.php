<?php
class libro {
    //Define una propiedad
    public $autor;
    public $anyo_publicacion;
    public $editorial;
    public $titulo;
    public $n_paginas;


    //Define un metodo
    public function mostrar() {
        echo $this->autor .'Elena Nito <br>';
        
        echo $this->anyo_publicacion .'2010 <br>';
        
        echo $this->editorial .'Banana <br>';
        
        echo $this->titulo .'Como sobrevivir en las alcantarillas<br>';
        
        echo $this->n_paginas .'429 <br>';
    }
}

$var = new libro();
$var->mostrar();
?>
