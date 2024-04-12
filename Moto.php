<?php



class Moto
{
    //En la clase Moto:
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
    // por_inc_anual: porcentaje de incremento anual de la moto


    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentajeIncAnual;
    private $activa; //(atributo que va a contener un valor true, si la moto está disponible para la
    // venta y false en caso contrario).

    public function __construct($codigo, $costo, $anioFabricacion, $descripcion, $porcentajeIncAnual, $activa)
    {
        $this->codigo = $codigo;
        $this->costo = $costo;
        $this->anioFabricacion = $anioFabricacion;
        $this->descripcion = $descripcion;
        $this->porcentajeIncAnual = $porcentajeIncAnual;
        $this->activa = $activa;
    }

    // metodos de acceso 

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getCosto()
    {
        return $this->costo;
    }
    public function getAnioFab()
    {
        return $this->anioFabricacion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function getPorIncAnual()
    {
        return $this->porcentajeIncAnual;
    }
    public function getActiva()
    {
        return $this->activa;
    }


    public function setCodigo($c)
    {
        return $this->codigo = $c;
    }

    public function setCosto($c)
    {
        return $this->costo = $c;
    }

    public function setAnioFab($a)
    {
        return $this->anioFabricacion = $a;
    }

    public function setDescripcion($d)
    {
        return $this->descripcion = $d;
    }

    public function setPorIncAnual($p)
    {
        return $this->porcentajeIncAnual = $p;
    }

    public function setActiva($a)
    {
        return $this->activa = $a;
    }

    //5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.

    // Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
    // la venta, el método realiza el siguiente cálculo:
    // $_venta = $_compra + $_compra * (anio * por_inc_anual)
    // donde $_compra: es el costo de la moto.
    // anio: cantidad de años transcurridos desde que se fabricó la moto.
    // por_inc_anual: porcentaje de incremento anual de la moto

    public function darPrecioVenta()
    {
        if ($this->getActiva() == true) {
            $anioActual=date('Y');
            $anio= $anioActual- $this->getAnioFab();
            $venta= $this->getCosto() +$this->getCosto()*($anio* $this->getPorIncAnual());
        } else {
            $venta = -1;
        }
        return $venta;
    }


    //metodo to String 

    public function __toString()
    {
        return "Datos Moto \n" .
            "Codigo :" . $this->getCodigo() . "\n" .
            "Costo :" . $this->getCosto() . "\n" .
            "Año de fabricacion :" . $this->getAnioFab() . "\n" .
            "descripcion" . $this->getDescripcion() . "\n " .
            "Porcentaje Anual :" . $this->getPorIncAnual() . "\n " .
            "Activa :" . $this->getActiva() . "\n ";
    }
}
