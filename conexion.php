<?php

//Datos de conexiónº
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'registro_eventos';
$port = '3309';

//Conexión
$conexion = mysqli_connect($servername,$username,$password,$database,$port);

//Comprobar

if(!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else    
   // echo "Conexión Exitosa"."<br>";
?>