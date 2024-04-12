<?php

class Venta
{
    //     En la clase Venta:

    // 1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
    // motos y el precio final.

    // 2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
    // atributo de la clase.

    // 3. Los métodos de acceso de cada uno de los atributos de la clase.

    // 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.

    // 5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
    // incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
    // vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
    // Utilizar el método que calcula el precio de venta de la moto donde crea necesario


    // atributos
    private $numero;
    private $fecha;
    private $objCliente;
    private $arrayMotos;
    private $precioFinal;

    //constructor

    public function __construct($numero, $fecha, $objCliente, $arrayMotos, $precioFinal)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objCliente = $objCliente;
        $this->arrayMotos = $arrayMotos;
        $this->precioFinal = $precioFinal;
    }

    // METODOS DE ACCESO get

    public function getNumero()
    {
        return $this->numero;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getObjCliente()
    {
        return $this->objCliente;
    }
    public function getArrayMotos()
    {
        return $this->arrayMotos;
    }
    public function getPrecioFinal()
    {
        return $this->precioFinal;
    }


    //metodo de acceso set 
    public function setNumero($n)
    {
        return $this->numero = $n;
    }
    public function setFecha($f)
    {
        return $this->fecha = $f;
    }

    public function setObjCliente($objC)
    {
        return $this->objCliente = $objC;
    }
    public function setArrayMotos($arrayM)
    {
        return $this->arrayMotos = $arrayM;
    }
    public function SetPrecioFinal($pF)
    {
        return $this->precioFinal = $pF;
    }


    //5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
    // incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
    // vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
    // Utilizar el método que calcula el precio de venta de la moto donde crea necesario

    public function incorporarMoto($objMoto)//falta realizar 
    {
        foreach ($objMoto as $vender) {
            if($vender == true){
                $newColMotos = array_push($this->getArrayMotos(), $objMoto);
                $this->setArrayMotos($newColMotos);
                //se pudo realizar la venta
                $resultVenta=true;
            }else{
                //no se pudo realizar la venta 
                $resultVenta=false;
            }
        }
        return $resultVenta;
    }

    public function __toString()
    {
        return "Datos de venta \n" .
            "numero :" . $this->getNumero() . "\n" .
            "Fecha :" . $this->getFecha() . "\n" .
            "Cliente" . $this->getObjCliente() . "\n" .
            "Motos " . $this->getArrayMotos() . "\n" .
            "Precio Final :" . $this->getPrecioFinal() . "\n";
    }
}
