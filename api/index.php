<?php
// Lógica para manejar la solicitud
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Respuesta JSON de ejemplo
    header('Content-Type: application/json');
    echo json_encode(array('message' => '¡Bienvenido a mi API REST en Vercel!'));
} else {
    // Si la solicitud no es GET, retornar un error
    http_response_code(405); // Método no permitido
    echo json_encode(array('error' => 'Método no permitido'));
}
?>
