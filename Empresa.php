<?php
class Empresa
{
    //     En la clase Empresa:
    // 1. Se registra la siguiente información: denominación, dirección, la colección de clientes, colección de
    // motos y la colección de ventas realizadas.
    // 2. Método constructor que recibe como parámetros los valores iniciales para los atributos de la clase.
    // 3. Los métodos de acceso para cada una de las variables instancias de la clase.
    // 4. Redefinir el método _toString para que retorne la información de los atributos de la clase

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

    private $denominacion;
    private $direccion;
    private $colCliente;
    private $colMotos;
    private $colVentasRealizadas;

    public function __construct($denominacion, $direccion, $colCliente, $colMotos, $colVentasRealizadas)
    {
        $this->denominacion = $denominacion;
        $this->direccion = $direccion;
        $this->colCliente = $colCliente;
        $this->colMotos = $colMotos;
        $this->colVentasRealizadas = $colVentasRealizadas;
    }
    //metodos de acceso

    public function getDenominacion()
    {
        return $this->denominacion;
    }
    public function setDenominacion($d)
    {
        return $this->denominacion = $d;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($d)
    {
        return $this->direccion = $d;
    }
    public function getColCliente()
    {
        return $this->colCliente;
    }
    public function setColCliente($d)
    {
        return $this->colCliente = $d;
    }
    public function getColMoto()
    {
        return $this->colMotos;
    }
    public function setColMoto($d)
    {
        return $this->colMotos = $d;
    }

    public function getColVentasR()
    {
        return $this->colVentasRealizadas;
    }
    public function setColVentasR($v)
    {
        return $this->colVentasRealizadas = $v;
    }


    //5. Implementar el método retornarMoto($codigoMoto) que recorre la colección de motos de la Empresa y
    // retorna la referencia al objeto moto cuyo código coincide con el recibido por parámetro.
    public function retornarMoto($codigoMoto)
    {
        $i = 0;

        $n = count($this->getColMoto());
        while ($i < $n && $this->getColMoto()[$i] !== $codigoMoto) {
            if ($this->getColMoto()[$i] == $codigoMoto) {
                $result = $this->getColMoto()[$i];
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
        $motos = [];

        foreach ($colCodigosMoto as $codigoMoto) {
            // Buscamos la moto correspondiente al código
            $moto = $this->buscarMotoPorCodigo($codigoMoto);

            // Verificamos si la moto existe y si está disponible para la venta
            if ($moto != null && $moto->estaDisponible() && $objCliente->puedeComprar($moto)) {
                // Agregamos la moto a la colección de motos de la venta
                $this->$motos[] = $moto;
            }
        }
        $importeFinal = 0;
        foreach ($this->$motos as $moto) {
            $importeFinal += $moto->obtenerPrecio();
        }

        return $importeFinal;
        // $newVentasR=$array_push($this->getColVentasR(),$importeFinal);
        // $this->setColVentasR($newVentasR);
    }
    private function buscarMotoPorCodigo($codigoMoto)
    {
        foreach ($this->getColMoto() as $moto) {
            if ($moto === $codigoMoto) {
                // Si encontramos la moto, la devolvemos
                $result = $moto;
            } else {
                // Si no se encuentra ninguna moto con el código buscado, retornamos null

                $result = null;
            }
        }
        return $result;
    }
    // Supongamos que aquí realizas la lógica para buscar la moto en tu sistema y devolver el objeto Moto correspondiente
    // Retorna la moto encontrada o null si no se encuentra



    //      7. Implementar el método retornarVentasXCliente($tipo,$numDoc) que recibe por parámetro el tipo y
    // número de documento de un Cliente y retorna una colección con las ventas realizadas al cliente.

    public function retornarVentasXCliente($tipo, $numDoc)
    {

        foreach ($this->getColVentasR() as  $cliente) {
            if ($numDoc == $cliente) {
                $newColCLienteVentas = array_push($this->getColVentasR(), $cliente);
            }
        }
        return $newColCLienteVentas;
    }

    // to string 

    public function __toString()
    {
        return "Datos de la Empresa" .
            "denominancion " . $this->getDenominacion() . "\n " .
            "direccion " . $this->getDireccion() . "\n" .
            "colCliente" . $this->getColCliente() . "\n" .
            "colMotos " . $this->getColMoto() . "\n" .
            "colVentasRealizadas" . $this->getColVentasR() . "\n";
    }
    // private $denominacion;
    // private $direccion;
    // private $colCliente;
    // private $colMotos;
    // private $colVentasRealizadas;

}
