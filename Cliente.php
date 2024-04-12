<?php
class Cliente
{

    //     En la clase Cliente:
    // 0. Se registra la siguiente información: nombre, apellido, si está o no dado de baja, el tipo y el número de
    // documento. Si un cliente está dado de baja, no puede registrar compras desde el momento de su baja.
    // 1. Método constructor que recibe como parámetros los valores iniciales para los atributos.
    // 2. Los métodos de acceso de cada uno de los atributos de la clase.
    // 3. Redefinir el método _toString para que retorne la información de los atributos de la clase.



    // atributos / variables instancias
    private $nombre;
    private $apellido;
    private $dadoBaja;
    private $dni;

    //constructor
    public function __construct($nombre, $apellido, $dadoBaja, $dni)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dadoBaja = $dadoBaja;
        $this->dni = $dni;
    }

    // metodos de acceso 

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getDadoBaja()
    {
        return $this->dadoBaja;
    }
    public function getDni()
    {
        return $this->dni;
    }

    public function setNombre($n)
    {
        return $this->nombre = $n;
    }
    public function setApellido($a)
    {
        return $this->apellido = $a;
    }
    public function setDadoBaja($d)
    {
        return $this->dadoBaja = $d;
    }
    public function setDni($dni)
    {
        return $this->dni = $dni;
    }

public function dadoBaja(){
    if($this->getDadoBaja()==true){

    }
}
    public function __toString()
    {
        return "Datos del cliente \n" .
            "Nombre:" . $this->getNombre() . "\n" .
            "Apellido:" . $this->getApellido() . "\n" .
            "DNI:" . $this->getDni() . "\n" .
            "Dado de baja :" . $this->getDadoBaja(). "\n";
    }
}
