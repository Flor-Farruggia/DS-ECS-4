<?php

 class Proveedor {
     public $Id;
     public $NombreApellido;
     Public $Documento;
     public $Producto;

     public function MostrarProveedor (){
        echo 'Los datos del proveedor son: '.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Nombre y Apellido: '.$this->NombreApellido.'<br>';
        echo 'Documento: '.$this->Documento.'<br>';
        echo 'Id del producto: '.$this->Producto->Id.'<br>';
        echo 'Código de producto: '.$this->Producto->Codigo.'<br>';
        echo 'Descripción del producto: '.$this->Producto->Descripcion.'<br>';
        echo 'Id de la marca de producto: '.$this->Producto->Marca->Id.'<br>';
        echo 'Descripción de la marca de producto: '.$this->Producto->Marca->Descripcion.'<br>';
        echo 'Código de la marca de producto: '.$this->Producto->Marca->Codigo.'<br>';
    }
 }