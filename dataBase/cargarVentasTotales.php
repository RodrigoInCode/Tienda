<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conexion.php');
    $sql = "SELECT SUM(dp.cantidad) AS total_cantidad
    FROM detalles_pedido dp
    JOIN (
        SELECT p.id_pedido
        FROM pedidos p
        ORDER BY p.fecha_creacion DESC
        LIMIT 10
    ) recent_pedidos ON dp.id_pedido = recent_pedidos.id_pedido";
$result = $conn->query($sql);
$total_cantidad = 0;

if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$total_cantidad = $row['total_cantidad'];
}

$conn->close();

echo json_encode(['total_cantidad' => $total_cantidad], JSON_UNESCAPED_UNICODE);
?>