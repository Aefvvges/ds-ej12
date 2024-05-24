<?php
require_once 'modelo/usuario.php';

$Usuario = new Usuario();

$Usuario->Id="55";
$Usuario->NombreUsuario="barbarat";
$Usuario->Clave="12345";
$Usuario->Email="email@gmail.com";
$Usuario->Nombre="barbara";
$Usuario->Apellido="torri";
$Usuario->FechaNacimiento="01/02/03";
$Usuario->NroDocumento="12345678";
$Usuario->FechaAlta="19/08/17";

$Usuario->MostrarDatos();