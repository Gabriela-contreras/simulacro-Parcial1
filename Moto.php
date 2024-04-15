<?php
// En la clase Moto:
// 1. Se registra la siguiente información: código, costo, año fabricación, descripción, porcentaje
// incremento anual, activa (atributo que va a contener un valor true, si la moto está disponible para la
// venta y false en caso contrario).

// 2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
// clase.
// 3. Los métodos de acceso de cada uno de los atributos de la clase.
// 4. Redefinir el método toString para que retorne la información de los atributos de la clase.
// 5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
// Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
// la venta, el método realiza el siguiente cálculo:
// $_venta = $_compra + $_compra * (anio * por_inc_anual)
// donde $_compra: es el costo de la moto.
// anio: cantidad de años transcurridos desde que se fabricó la moto.
// por_inc_anual: porcentaje de incremento anual de la moto.

class Moto
{
    private $codigo;
    private $costo;
    private $anioFab;
    private $descripcion;
    private $porcentajeIncAnual;
    private $activa;

    public function __construct($codigo, $costo, $anioFab,  $descripcion, $porcentajeIncAnual, $activa)
    {

        $this->codigo  = $codigo;
        $this->costo = $costo;
        $this->anioFab = $anioFab;
        $this->descripcion  = $descripcion;
        $this->porcentajeIncAnual = $porcentajeIncAnual;
        $this->activa = $activa;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($cod)
    {
        $this->codigo  = $cod;
    }

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($cos)
    {
        $this->costo = $cos;
    }

    public function getAnioFab()
    {
        return $this->anioFab;
    }

    public function setAnioFab($anio)
    {
        $this->anioFab = $anio;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($des)
    {
        $this->descripcion  = $des;
    }

    public function getPorcentajeIncAnual()
    {
        return $this->porcentajeIncAnual;
    }

    public function setPorcentajeIncAnual($porcentaje)
    {
        $this->porcentajeIncAnual = $porcentaje;
    }

    public function getActiva()
    {
        return $this->activa;
    }

    public function setActiva($ac)
    {
        $this->activa = $ac;
    }

    public function __toString()
    {
        return "\n----- Datos moto ------ \n " .
            "\n Codigo : " . $this->getCodigo() . "\n " .
            "Costo : " . $this->getCosto() . "\n" .
            "Anio fabricacion : " . $this->getAnioFab() . "\n" .
            "Descripcion : " . $this->getDescripcion() . "\n" .
            "Porcentaje Incremento Anual : " . $this->getPorcentajeIncAnual() . "\n " .
            "Activa : " . $this->getActiva() . "\n";
    }

    //5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
    // Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
    // la venta, el método realiza el siguiente cálculo:
    // $_venta = $_compra + $_compra * (anio * por_inc_anual)
    // donde $_compra: es el costo de la moto.
    // anio: cantidad de años transcurridos desde que se fabricó la moto.
    // por_inc_anual: porcentaje de incremento anual de la moto.

    public function darPrecioVenta()
    {
        if ($this->getActiva() == true) {
            $anioActual=date("Y");
            $anio= $anioActual - $this->getAnioFab();
            //$_venta = $_compra + $_compra * (anio * por_inc_anual)
            $venta= $this->getCosto() + $this->getCosto()*($anio *$this->getPorcentajeIncAnual());
            // donde $_compra: es el costo de la moto.
            // anio: cantidad de años transcurridos desde que se fabricó la moto.
            // por_inc_anual: porcentaje de incremento anual de la moto.
        }else{
            $venta = -1; //Si la moto no se encuentra disponible para la venta retorna un valor < 0.
        }
        return $venta ; 
    }
}
