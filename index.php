<?php

require_once 'modelos/cliente.php';
require_once 'modelos/marcaProducto.php';
require_once 'modelos/producto.php';
require_once 'modelos/proveedor.php';

$c = new Cliente ();
$c->Id = 01;
$c->NombreApellido = 'Pepe Gomez';
$c->Documento =22444666;

$mp = new MarcaProducto ();
$mp->Id = 8;
$mp->Descripcion = 'Georgalos';
$mp->Codigo = 'MP001';

$prd = new Producto ();
$prd->Id = 101;
$prd->Descripcion = 'Chocolate';
$prd->Codigo = 'PRD001';
$prd->Marca = $mp;

$pv = new Proveedor ();
$pv->Id = 22;
$pv->NombreApellido = 'Juan Georgalos';
$pv->Documento = 11222333;
$pv->Producto = $prd;

$c->MostrarCliente();
$pv-> MostrarProveedor();
