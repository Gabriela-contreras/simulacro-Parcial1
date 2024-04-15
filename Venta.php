<?php
// En la clase Venta:
// 1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
// motos y el precio final.
// 2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
// atributo de la clase.
// 3. Los métodos de acceso de cada uno de los atributos de la clase.
// 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
// 5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
// incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
// vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
// Utilizar el método que calcula el precio de venta de la moto donde crea necesario.

class Venta
{
    //número, fecha, referencia al cliente, referencia a una colección de
    // motos y el precio final.

    private $numero;
    private $fecha;
    private $objCliente;
    private $arrMotos;
    private $precioFinal;




    public function __construct($numero,  $fecha, $objCliente, $arrMotos, $precioFinal)
    {

        $this->numero = $numero;
        $this->fecha  = $fecha;
        $this->objCliente = $objCliente;
        $this->arrMotos = $arrMotos;
        $this->precioFinal = $precioFinal;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($num)
    {
        $this->numero = $num;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($newFecha)
    {
        $this->fecha  = $newFecha;
    }

    public function getObjCliente()
    {
        return $this->objCliente;
    }

    public function setObjCliente($cliente)
    {
        $this->objCliente = $cliente;
    }

    public function getArrMotos()
    {
        return $this->arrMotos;
    }

    public function setArrMotos($motos)
    {
        $this->arrMotos = $motos;
    }

    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }

    public function setPrecioFinal($precio)
    {
        $this->precioFinal = $precio;
    }
    public function arrayToString($array)
    {
        $result = "";
        foreach ($array as $elemento) {
            $result = $result . $elemento . "";
        }
        return $result;
    }

    public function __toString()
    {

        return " \n ----- Datos Moto ---- \n " .
            "\n Numero : " . $this->getNumero() . "\n" .
            "Fecha : " . $this->getFecha() . "\n" .
            "Cliente : " . $this->getObjCliente() . "\n" .
            "Coleccion Motos : " . $this->arrayToString($this->getArrMotos()) . "\n" .
            "Precio : " . $this->getPrecioFinal() . "\n";
    }


    //5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
    // incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
    // vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
    // Utilizar el método que calcula el precio de venta de la moto donde crea necesario.

    public function incorporarMoto($objMoto)
    {
        $newPrecio = $objMoto->getPrecioFinal();
        $enVenta = $objMoto->getActiva();
        if ($enVenta == true) {
            $newArrayMotos = array_push($this->getArrMotos(), $objMoto);
            $this->setArrMotos($newArrayMotos);
            $this->setPrecioFinal($newPrecio);
        }
    }
}
