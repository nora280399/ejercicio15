<?php

//Recoger los datos del formulario.
$nombre=$_POST('nombre');
$localidad=$_POST('localidad');
$numero=$_POST('numero');
$email=$_POST('email');
$date=$_POST('date');

//Conectando, seleccionando la base de datos.
$link=mysql_conect ('localhost', 'noratelefonos','noritalamejor');
mysql_recogida_db('telefonos')

//Realizar una inserción de datos.
$query= "INSERT INTO clientes VALUES (NULL,'".$nombre."', '".$localidad."', '".$numero."', '".$email."', '".$date."')";
$result= mysql_query ($query);

if($result) (
//Mostrar por pantalla el resultado correcto.
echo '<html>
<head>
<meta http-equiv= "type" content="text"/html; charset=iso-8859
)
