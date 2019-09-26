<?php
class persona {
    public $nombre;
    public $edad;
    public $sexo;
    public $presencia; //si esta o no esta
}

class estudiante extends persona {
    public $nota;
    function __construct(){
        $this->presencia=(rand(0,1)==1)?true:false;
    }
}

class profesor extends persona {
    public $materia;
    function __construct(){
        $this->presencia=(rand(0,4)==3)?false:true;
    }
}

class aula {
    public $id;
    public $max_alumn;
    public $asignatura;
    public $alumnos; 
    public $prof;   
    function __construct(){
        for ($i=0; $i < 20 ; $i++) { 
            $this->alumnos[] = new aula(); //se deberia repetir por n alumnos
        }
        $this->prof[] = new profesor();
    }   
    
}

$aula1 = new aula();

?>