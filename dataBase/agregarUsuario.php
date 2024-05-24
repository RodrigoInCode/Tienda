
<?php
include 'conexion.php';
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    
    if (empty($usuario) || empty($nombre) || empty($password) || empty($correo) || empty($telefono)) {
        echo json_encode(['message' => 'Todos los datos obligatorios']);
    }

    
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $conex->prepare("INSERT INTO `usuarios`(`usuario`, `nombre`, `correo_electronico`, `contrasena`, `numero_telefono`) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conex->error);
        echo json_encode(['message' => 'Error al preparar la consulta:', 'error' => $conex->error]);
    }
    $stmt->bind_param("sssss", $usuario, $nombre, $correo, $password_hash, $telefono);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Formulario recibido con exito', 'usuario' => $usuario, 'nombre' => $nombre, 'correo' => $correo, 'telefono' => $telefono]);
    } else {
        echo json_encode(['Error: ' => $stmt->error]);
    }

    $stmt->close();
    $conex->close();
} else {
    echo "Método de solicitud no válido.";
    echo json_encode(['message'=> 'Método de solicitud no válido']);
}
?>
