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

$objAlumno= new persona(); // instancia o creación de un objeto
$objAlumno->asignarNombre("Lean");  // llamando un método
$objAlumno->imprimirNombre();

$objAlumno2= new persona();
$objAlumno2->asignarNombre("Juan");
$objAlumno2->imprimirNombre();

echo $objAlumno2->mostrarEdad();

?>