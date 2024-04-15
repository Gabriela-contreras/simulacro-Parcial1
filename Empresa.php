<?php
// En la clase Empresa:
// 1. Se registra la siguiente información: denominación, dirección, la colección de clientes, colección de
// motos y la colección de ventas realizadas.
// 2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.
// 3. Los métodos de acceso para cada una de las variables instancias de la clase.
// 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
// 5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
// retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.
// 6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
// parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
// se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
// Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
// para registrar una venta en un momento determinado.
// El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
// venta.
// 7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
// número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.


class Empresa
{
    //denominación, dirección, la colección de clientes, colección de
    // motos y la colección de ventas realizadas.

    private $denominacion;
    private $direccion;
    private $arrClientes;
    private $arrMotos;
    private $arrVentasRealizadas;
    private $arraMotosVenta;




    public function __construct($denominacion, $direccion, $arrClientes, $arrMotos, $arrVentasRealizadas, $arraMotosVenta)
    {

        $this->denominacion  = $denominacion;
        $this->direccion = $direccion;
        $this->arrClientes = $arrClientes;
        $this->arrMotos = $arrMotos;
        $this->arrVentasRealizadas = $arrVentasRealizadas;
        $this->arraMotosVenta = $arraMotosVenta;
    }

    public function getDenominacion()
    {
        return $this->denominacion;
    }

    public function setDenominacion($newdenominacion)
    {
        $this->denominacion  = $newdenominacion;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($newdireccion)
    {
        $this->direccion = $newdireccion;
    }

    public function getArrClientes()
    {
        return $this->arrClientes;
    }

    public function setArrClientes($clientes)
    {
        $this->arrClientes = $clientes;
    }

    public function getArrMotos()
    {
        return $this->arrMotos;
    }

    public function setArrMotos($motos)
    {
        $this->arrMotos = $motos;
    }

    public function getArrVentasRealizadas()
    {
        return $this->arrVentasRealizadas;
    }

    public function setArrVentasRealizadas($ventas)
    {
        $this->arrVentasRealizadas = $ventas;
    }

    public function getArraMotosVenta()
    {
        return $this->arraMotosVenta;
    }

    public function setArraMotosVenta($value)
    {
        $this->arraMotosVenta = $value;
    }


    public function arrayToString($array)
    {
        $result = "";
        foreach ($array as $elemento) {
            $result = $result . $elemento . "";
        }
        return $result;
    }
    // 4. Redefinir el método _toString para que retorne la información de los atributos de la clase.

    public function __toString()
    {
        return "---- Datos de la empresa --- \n " .
            "\n denominacion : " . $this->getDenominacion() . "\n" .
            "direccion" . $this->getDireccion() . "\n" .
            "Arreglo Clientes :" . $this->arrayToString($this->getArrClientes())  . "\n" .
            "Arreglo Motos " . $this->arrayToString($this->getArrMotos()) . "\n" .
            "Arreglo Ventas Realizadas " . $this->arrayToString($this->getArrVentasRealizadas()) . "\n ";
    }


    //5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
    // retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.

    public function  retornarMoto($codigoMoto)
    {
        $i = 0;
        $cantArregloMotos = count($this->getArrMotos());
        while ($i < $cantArregloMotos) {
            $moto = $this->getArrMotos()[$i];
            if ($moto->getCodigo() === $codigoMoto) {
                $result = $moto;
            }
            $i++;
        }
        return $result;
    }


    //6. Implementar el método registrarVenta($colCodigosMoto, $objCliente) método que recibe por
    // parámetro una colección de códigos de motos, la cual es recorrida, y por cada elemento de la colección
    // se busca el objeto moto correspondiente al código y se incorpora a la colección de motos de la instancia
    // Venta que debe ser creada. Recordar que no todos los clientes ni todas las motos, están disponibles
    // para registrar una venta en un momento determinado.
    // El método debe setear los variables instancias de venta que corresponda y retornar el importe final de la
    // venta.

    public function registrarVenta($colCodigosMoto, $objCliente)
    {
        $i = 0;
        $cantColCodigoMoto = count($colCodigosMoto);

        while ($i < $cantColCodigoMoto) {
            $CodigoM = $colCodigosMoto[$i];
            $arrMoto = $this->getArrMotos();
            while ($i < count($arrMoto)) {
                $objMoto = $this->getArrMotos()[$i];

                if ($objMoto->getCodigo() == $CodigoM && $objMoto->getActiva() == true && $objCliente->getDadoBaja() == false) {

                    $agregandoMotos = array_push($this->getArraMotosVenta(), $objMoto);
                    $this->setArraMotosVenta($agregandoMotos);
                    $importe = $this->getArraMotosVenta()->getPrecioFinal();
                }
                $i++;
            }
            $i++;
        }
        return $importe;
    }



    //7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
    // número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.

    public function retornarVentasXCliente($tipo, $numDoc)
    {
        $colVentasCliente = [];
        $i = 0;
        while ($i < count($this->getArrClientes())) {
            $cliente = $this->getArrClientes()[$i];
            if ($cliente->getDocumento() == $numDoc && $cliente->getTipo() == $tipo) {

                foreach ($this->arrVentasRealizadas as $venta) {

                    if ($cliente == $venta->getobjCliente()) {
                        array_push($colVentasCliente, $venta);
                    }
                }

            }
            $i++;
        }
        return $colVentasCliente;
    }
}
