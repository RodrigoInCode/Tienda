<?php
include 'conexion.php';
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['password'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];


    $consulta = "INSERT INTO `usuarios` (`usuario`,`nombre`, `correo_electronico`, `contrasena`, `numero_telefono`) VALUES ('$usuario','$nombre','$correo','$contraseña','$telefono')";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {
        echo "DATOS AGREGADOS";
        echo json_encode(['message' => 'Formulario recibido con exito', 'usuario' => $usuario, 'nombre' => $nombre, 'correo' => $correo, 'telefono' => $telefono]);
    } else {
        echo "Error no se pudieron agregar";
    }

    
} else {

    echo json_encode(['error' => 'Método no permitido']);
}
