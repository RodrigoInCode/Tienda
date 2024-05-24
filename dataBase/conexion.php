<?php
$hostname="localhost";
$user="root";
$password="yoSoyAdmin@777";
$database="tienda";
$conex=mysqli_connect($hostname,$user,$password,$database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>