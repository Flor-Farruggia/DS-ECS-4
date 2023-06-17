<?php

 class Cliente {
     public $Id;
     public $NombreApellido;
     Public $Documento;

     public function MostrarCliente() {
        echo 'Los datos del cliente son: '.'<br>';
        echo 'Id: '.$this->Id.'<br>';
        echo 'Nombre y Apellido: '.$this->NombreApellido.'<br>';
        echo 'Documento: '.$this->Documento.'<br>';
     }
 }