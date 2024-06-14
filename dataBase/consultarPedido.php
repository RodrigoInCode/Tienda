<?php
include('conexion.php');
//Depuracion
// header('Content-Type: application/json');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$html = '';
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
error_log("Campo recibido: " . $campo);
$colums = ['u.nombre', 'p.fecha_creacion', 'p.estado'];
$where = '';

if ($campo != null && $campo !== '') {
    $where = "WHERE (";

    $count = count($colums);
    for ($i = 0; $i < $count; $i++) {
        $where .= $colums[$i] . " LIKE '%" . $campo . "%'";
        if ($i < $count - 1) {
            $where .= " OR ";
        }
    }
    $where .= ")";
    error_log("Construcción del WHERE: " . $where);
}


$sql = "SELECT p.estado, p.fecha_creacion, u.nombre 
        FROM pedidos p 
        JOIN usuarios u ON p.id_usuario = u.id_usuario 
        $where";


if ($campo == null || $campo === '') {
    $sql .= " ORDER BY p.fecha_creacion DESC LIMIT 5";
}
error_log("Consulta SQL: " . $sql);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['nombre'] . '</td>';
        $html .= '<td>' . $row['fecha_creacion'] . '</td>';
        $html .= '<td class="status">' . $row['estado'] . '</td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr><td colspan="3">Sin Resultados</td></tr>';
}

$conn->close();

echo json_encode(['html' => $html, 'sql' => $sql, 'campo' => $campo], JSON_UNESCAPED_UNICODE);
?>
