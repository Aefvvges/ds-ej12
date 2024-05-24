<?php

class Usuario{
    public $Id;
    public $NombreUsuario;
    public $Clave;
    public $Email;
    public $Nombre;
    public $Apellido;
    public $FechaNacimiento;
    public $NroDocumento;
    public $FechaAlta;

    public function MostrarDatos(){
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre de Usuario: ' . $this->NombreUsuario . '<br>';
        echo 'Clave: ' . $this->Clave . '<br>';
        echo 'Email: ' . $this->Email . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Apellido: ' . $this->Apellido . '<br>';
        echo 'Fecha de Nacimiento: ' . $this->FechaNacimiento . '<br>';
        echo 'Numero de Documento: ' . $this->NroDocumento . '<br>';
        echo 'Fecha de Alta: ' . $this->FechaAlta . '<br>';
    }
}