<php

//Recoger los datos del formulario.
$nombre=$_POST('nombre');
$apellido1=$_POST('apellido1');
$apellido2=$_POST('apellido2');
$dni=$_POST('dni');
$localidad=$_POST('localidad');
$numero=$_POST('numero');
$email=$_POST('email');
$fecha=$_POST('fecha');

$link=mysql_conect ('localhost', 'noratelefonos','noritalamejor');

