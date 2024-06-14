<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conexion.php');
$sql = "SELECT COUNT(*) AS count FROM pedidos WHERE estado = 'pendiente'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $count = $row['count'];
} else {
    $count = 0;
}

$conn->close();
echo json_encode(['count' => $count], JSON_UNESCAPED_UNICODE);

?>