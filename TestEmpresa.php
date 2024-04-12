<?php
include_once("Cliente.php");
include_once("Moto.php");
include_once("Empresa.php");
include_once("Venta.php");

// Implementar un script TestEmpresa en la cual:
// 1. Cree 2 instancias de la clase Cliente: $objCliente1, $objCliente2.
$cliente = new Cliente("juan", "ferbert", false, 45732848);
$cliente = new Cliente("sofia", "medrano", true, 4598589);

// 2. Cree 3 objetos Motos con la información visualizada en la tabla: código, costo, año fabricación,
// descripción, porcentaje incremento anual, activo.
// código costo anio_fabricacion Descripcion porc_increment activo
// 11 2230000 2022 Benelli Imperiale 400 85% true
// 12 584000 2021 Zanella Zr 150 Ohc 70% true
// 13 999900 2023 Zanella Patagonian Eagle 250 55% false
$moto = new Moto(11, 2230000, 2022, "Benelli Imperiale 400 ", 85, true);
$moto = new Moto(12, 584000, 2021, "Zanella Zr 150 Ohc", 70, true);
$moto = new Moto(13, 999900, 2023, " Zanella Patagonian Eagle 250 ", 55, false);


// 4. Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av
// Argenetina 123”, colección de motos= [$obMoto1, $obMoto2, $obMoto3] , colección de clientes =
// [$objCliente1, $objCliente2 ], la colección de ventas realizadas=[].
$colecciondemotos = [$obMoto1, $obMoto2, $obMoto3];
$colclientes = [$objCliente1, $objCliente2];
$colVentasR = [];
$empresa = new Empresa(" Alta Gama", "AvArgenetina 123", $colecciondemotos, $colclientes, $colVentasR);


// 5. Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
// $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
// punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.
$colMotos1 = [11, 12, 13];
$empresa->registrarVenta($colMotos1, $cliente);

// 6. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
// $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
// punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido.
$colMotos2 = [0];
$empresa->registrarVenta($colMotos2, $cliente);




// 7. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
// $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
// punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido.
$colMotos3 = [2];
$empresa->registrarVenta($colMotos3, $cliente);



// 8. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
// corresponden con el tipo y número de documento del $objCliente1.

$empresa->retornarVentasXCliente("dni", 45732848);

// 9. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
// corresponden con el tipo y número de documento del $objCliente2
$empresa->retornarVentasXCliente("dni", 4598589);


// 10. Realizar un echo de la variable Empresa creada en 2

echo $empresa; //bien 
