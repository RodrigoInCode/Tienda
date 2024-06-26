
<?php
include 'conexion.php';
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$respuesta = array('success' => false, 'mensaje' => '');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    
    
    
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $conex->prepare("INSERT INTO `usuarios`(`nombre`, `correo_electronico`, `contrasena`, `numero_telefono`) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        $respuesta['mensaje'] = "Error_al_preparar_la_consulta:" . $conex->error;
        echo json_encode($respuesta);
    }else {
        $stmt->bind_param("ssss",$nombre, $correo, $password_hash, $telefono);
    }

    if ($stmt->execute()) {
        
        $respuesta['mensaje'] = "Formulario_recibido_con_exito";
        $respuesta['success']=true;
    } else {
       
        $respuesta['mensaje']= "Error:".$stmt->error;
    }

    $stmt->close();
    $conex->close();
} else {
    echo "Método de solicitud no válido.";
    echo json_encode(['message'=> 'Método de solicitud no válido']);
}
echo json_encode($respuesta);
?>
