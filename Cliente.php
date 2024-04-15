<?php
// En la clase Cliente:
// 0. Se registra la siguiente información: nombre, apellido , si está o no dado de baja , el tipo y el número de
// documento. Si un cliente está dado de baja, no puede registrar compras desde el momento de su baja.
// 1. Método constructor que recibe como parámetros los valores iniciales para los atributos.
// 2. Los métodos de acceso de cada uno de los atributos de la clase.
// 3. Redefinir el método _toString para que retorne la información de los atributos de la clase.


class Cliente
{
    private $nombre;
    private $apellido;
    private $tipo;
    private $dadoBaja;
    private $documento;

    public function __construct($nombre,  $apellido, $tipo, $dadoBaja,  $documento)
    {

        $this->nombre = $nombre;
        $this->apellido  = $apellido;
        $this->tipo = $tipo;
        $this->dadoBaja = $dadoBaja;
        $this->documento  = $documento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($n)
    {
        $this->nombre = $n;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($ap)
    {
        $this->apellido  = $ap;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($t)
    {
        return $this->tipo = $t;
    }
    public function getDadoBaja()
    {
        return $this->dadoBaja;
    }

    public function setDadoBaja($dB)
    {
        $this->dadoBaja = $dB;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento($doc)
    {
        $this->documento  = $doc;
    }
    public function Baja()
    {
        if ($this->getDadoBaja() == true) {
            $result = 1;
        } else {
            $result = 0;
        }
        return $result;
    }
    public function __toString()
    {
        return " \n ----Datos cliente---- \n" .
            "\n nombre : " . $this->getNombre() . "\n" .
            "apellido : " . $this->getApellido() . "\n" .
            "dado de baja : " . $this->Baja() . "\n" .
            "tipo : " . $this->getTipo() . "\n" .
            "Documento : " . $this->getDocumento()  . "\n ";
    }
}
