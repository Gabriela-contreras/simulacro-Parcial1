<?php
include_once("Cliente.php");
include_once("Empresa.php");
include_once("Venta.php");
include_once("Moto.php");


// Implementar un script TestEmpresa en la cual:

// 1. Cree 2 instancias de la clase Cliente: $objCliente1, $objCliente2.
$objCliente1= new Cliente("gusti","contreras","dni",false , 4335625);
$objCliente2= new Cliente("santi","guerra","dni",true , 45732848);


// 2. Cree 3 objetos Motos con la información visualizada en la tabla: código, costo, año fabricación,
// descripción, porcentaje incremento anual, activo.
$obMoto1= new Moto(11, 2230000 ,2022 ,"Benelli Imperiale 400" ,85, true);
$obMoto2= new Moto(12, 584000 ,2021, "Zanella Zr 150 Ohc" ,70 ,true);
$obMoto3= new Moto(13, 999900 ,2023, 'Zanella Patagonian Eagle', 250, 55, false);



// código costo anio_fabricacion Descripcion porc_increment activo
// 11 2230000 2022 Benelli Imperiale 400 85% true
// 12 584000 2021 Zanella Zr 150 Ohc 70% true
// 13 999900 2023 Zanella Patagonian Eagle 250 55% false


// 4. Se crea un objeto Empresa con la siguiente información: denominación =” Alta Gama”, dirección= “Av
// Argenetina 123”, colección de motos= [$obMoto1, $obMoto2, $obMoto3] , colección de clientes =
// [$objCliente1, $objCliente2 ], la colección de ventas realizadas=[].
$coleccionMotos= [$obMoto1, $obMoto2, $obMoto3];
$colVentasR=[];
$venta=new Venta(45,2002,$objCliente1 ,$coleccionMotos,22512);
$motosVenta= $venta->getArrMotos();
$colClientes =[$objCliente1, $objCliente2 ];
$empresa = new Empresa(" Alta Gama","Av Argenetina 123" , $colClientes,$coleccionMotos,$colVentasR,$motosVenta);


// 5. Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
// $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
// punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido.

$empresa->registrarVenta([11,12,13] , $objCliente2);

// 6. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
// $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
// punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido.
$empresa->registrarVenta([0] , $objCliente2);



// 7. Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
// $objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
// punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido.

$empresa->registrarVenta([2],$objCliente2);

// 8. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
// corresponden con el tipo y número de documento del $objCliente1.
$tipo= $objCliente1->getTipo();
$documento = $objCliente1->getDocumento();
$empresa->retornarVentasXCliente($tipo,$documento);
// 9. Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
// corresponden con el tipo y número de documento del $objCliente2
$tipo2= $objCliente2->getTipo();
$documento2 = $objCliente2->getDocumento();
$empresa->retornarVentasXCliente($tipo2,$documento2);
// 10. Realizar un echo de la variable Empresa creada en 2.

echo  $empresa;

