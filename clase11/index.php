<?php 
class Persona{
    public $nombre;
    private $apellido;
    protected $edad;

    public function __construct($a,$b,$c)
    {
        $this->nombre = $a;
        $this->apellido = $b;
        $this->edad = $c;
    }
}
class Usuario extends Persona{
public function verEdad()
{
    echo $this->edad;
}
public function cargarEdad($ed)
{
    $this->edad = $ed;
}
}

$usuario = new Usuario('Martin','Pared Baez',50);
echo $usuario->nombre;
$usuario->cargarEdad(30);
$usuario->verEdad();
