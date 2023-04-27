<?php 

class persona{

    public $nombre;   //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){    // acciones o métodos

        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."<br/>";
    }

    public function mostrarEdad(){   // los datos en private solo pueden ser accedido y por lo tanto cambiados por metodos de la misma clase o heredadas.
        $this->edad=20;
        return $this->edad;
    }

}


class trabajador extends persona{   //clase heredada de la clase persona
    public $puesto;
    public function prensentarcomoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}

$objTrabajador= new trabajador(); // instancia o creación de un objeto
$objTrabajador->asignarNombre("Lean");  // llamando un método
$objTrabajador->puesto="Profesor";

$objTrabajador->prensentarcomoTrabajador();

?>