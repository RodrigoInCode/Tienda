<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conexion.php');
$sql="SELECT `nombre`, `descripcion` FROM `productos` ORDER BY id_producto DESC LIMIT 5";
?>